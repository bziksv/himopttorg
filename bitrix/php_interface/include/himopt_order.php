<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

/**
 * Hide ZIP ("Индекс") from order props: not needed, address is enough.
 * Runs once per request; updates DB if ZIP is still active.
 */
function himopt_order_disable_zip()
{
	static $done = false;
	if ($done || !CModule::IncludeModule("sale")) {
		return;
	}
	$done = true;

	if (COption::GetOptionString("sale", "himopt_zip_disabled", "N") === "Y") {
		return;
	}

	$db = CSaleOrderProps::GetList(
		array(),
		array("CODE" => "ZIP", "ACTIVE" => "Y"),
		false,
		false,
		array("ID")
	);
	$updated = false;
	while ($prop = $db->Fetch()) {
		CSaleOrderProps::Update($prop["ID"], array(
			"ACTIVE" => "N",
			"IS_ZIP" => "N",
			"REQUIRED" => "N",
			"REQUIED" => "N",
		));
		$updated = true;
	}
	if ($updated || CSaleOrderProps::GetList(array(), array("CODE" => "ZIP", "ACTIVE" => "Y"), false, false, array("ID"))->Fetch() === false) {
		COption::SetOptionString("sale", "himopt_zip_disabled", "Y");
	}
}

/**
 * Delivery UX: Самовывоз + Доставка курьером (не «Без доставки»).
 * Адрес доставки активен, но не always-required — обязателен только при курьере (см. guard).
 * Местоположение скрыто, по умолчанию Воронеж (чтобы шаг доставки не скипался).
 */
function himopt_order_setup_delivery_logic()
{
	static $done = false;
	if ($done || !CModule::IncludeModule("sale")) {
		return;
	}
	$done = true;

	if (COption::GetOptionString("sale", "himopt_delivery_logic_v1", "N") === "Y") {
		return;
	}

	global $DB;

	// Services: courier on, empty "Без доставки" off, pickup stays
	$DB->Query("UPDATE b_sale_delivery_srv SET ACTIVE='Y' WHERE ID=1");
	$DB->Query("UPDATE b_sale_delivery_srv SET ACTIVE='Y' WHERE ID=2");
	$DB->Query("UPDATE b_sale_delivery_srv SET ACTIVE='N' WHERE ID=20 AND CLASS_NAME LIKE '%EmptyDelivery%'");

	// Restrict both to Russia so LOCATION filter works
	foreach (array(1, 2) as $delivId) {
		$exists = $DB->Query("
			SELECT 1 AS X FROM b_sale_delivery2location
			WHERE DELIVERY_ID=".intval($delivId)." AND LOCATION_CODE='20' AND LOCATION_TYPE='L'
		")->Fetch();
		if (!$exists) {
			$DB->Query("
				INSERT INTO b_sale_delivery2location (DELIVERY_ID, LOCATION_TYPE, LOCATION_CODE)
				VALUES (".intval($delivId).", 'L', '20')
			");
		}
	}

	// LOCATION props: active + IS_LOCATION (needed so step 3 is not skipped)
	$DB->Query("
		UPDATE b_sale_order_props
		SET ACTIVE='Y', IS_LOCATION='Y', REQUIRED='N', DEFAULT_VALUE='1029'
		WHERE CODE='LOCATION'
	");

	// ADDRESS: show again, not globally required (обязателен только при курьере — guard)
	$DB->Query("
		UPDATE b_sale_order_props
		SET ACTIVE='Y', REQUIRED='N'
		WHERE CODE='ADDRESS'
	");

	// Cash: name matches both pickup and courier
	$DB->Query("UPDATE b_sale_pay_system SET NAME='Наличными при получении' WHERE ID=1");
	$DB->Query("UPDATE b_sale_pay_system_action SET NAME='Наличными при получении' WHERE PAY_SYSTEM_ID=1");

	COption::SetOptionString("sale", "himopt_delivery_address_off", "N");
	COption::SetOptionString("sale", "himopt_delivery_logic_v1", "Y");
}

/**
 * Force delivery/payment steps + default location (Воронеж).
 * sale.order.full sticky-skips steps via hidden SKIP_*_STEP=Y from old sessions.
 */
function himopt_order_delivery_guard()
{
	if (defined("ADMIN_SECTION") && ADMIN_SECTION === true) {
		return;
	}
	$page = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
	if (strpos($page, "/personal/order/make") === false) {
		return;
	}
	if (!CModule::IncludeModule("sale")) {
		return;
	}

	$defaultLoc = "1029";

	// Never skip delivery / payment — we have Самовывоз + Курьер and a real pay system
	$_REQUEST["SKIP_THIRD_STEP"] = "N";
	$_POST["SKIP_THIRD_STEP"] = "N";
	$_REQUEST["SKIP_FORTH_STEP"] = "N";
	$_POST["SKIP_FORTH_STEP"] = "N";

	// Drop obsolete "Без доставки" (EmptyDeliveryService id=20)
	$delivRaw = $_REQUEST["DELIVERY_ID"] ?? "";
	if (is_array($delivRaw)) {
		$delivRaw = $delivRaw[0] ?? "";
	}
	if ((string)$delivRaw === "20") {
		unset($_REQUEST["DELIVERY_ID"], $_POST["DELIVERY_ID"]);
	}

	$personType = intval($_REQUEST["PERSON_TYPE"] ?? 0);

	// Keep location filled (hidden field) so component does not skip step 3
	$locFilter = array("CODE" => "LOCATION", "ACTIVE" => "Y");
	if ($personType > 0) {
		$locFilter["PERSON_TYPE_ID"] = $personType;
	}
	$dbLoc = CSaleOrderProps::GetList(array(), $locFilter, false, false, array("ID"));
	while ($loc = $dbLoc->Fetch()) {
		$key = "ORDER_PROP_".$loc["ID"];
		if (empty($_REQUEST[$key])) {
			$_REQUEST[$key] = $defaultLoc;
			$_POST[$key] = $defaultLoc;
		}
	}
	if (empty($_REQUEST["DELIVERY_LOCATION"])) {
		$_REQUEST["DELIVERY_LOCATION"] = $defaultLoc;
		$_POST["DELIVERY_LOCATION"] = $defaultLoc;
	}

	if (($_SERVER["REQUEST_METHOD"] ?? "") !== "POST") {
		return;
	}
	if (!empty($_REQUEST["BACK"]) && $_REQUEST["BACK"] === "Y") {
		return;
	}

	$step = intval($_REQUEST["CurrentStep"] ?? 0);
	// After delivery chosen (leaving step 3+) require address for courier
	if ($step <= 3) {
		return;
	}

	$deliveryId = $_REQUEST["DELIVERY_ID"] ?? "";
	if (is_array($deliveryId)) {
		$deliveryId = $deliveryId[0] ?? "";
	}
	$deliveryId = (string)$deliveryId;
	$isCourier = ($deliveryId === "1" || strpos($deliveryId, "1:") === 0);
	if (!$isCourier) {
		return;
	}

	if ($personType <= 0) {
		return;
	}

	$db = CSaleOrderProps::GetList(
		array(),
		array("PERSON_TYPE_ID" => $personType, "ACTIVE" => "Y", "CODE" => "ADDRESS"),
		false,
		false,
		array("ID", "NAME")
	);
	while ($prop = $db->Fetch()) {
		$key = "ORDER_PROP_".$prop["ID"];
		$raw = isset($_REQUEST[$key]) ? trim((string)$_REQUEST[$key]) : "";
		if ($raw === "") {
			$GLOBALS["HIMOPT_ORDER_PHONE_ERROR"] = "Укажите адрес доставки — выбран способ «Доставка курьером».";
			$_REQUEST["CurrentStep"] = 2;
			$_POST["CurrentStep"] = 2;
			break;
		}
	}
}

/**
 * Hide FAX for legal entities — nobody needs a fax in 2026.
 * Idempotent via option flag.
 */
function himopt_order_disable_fax()
{
	static $done = false;
	if ($done || !CModule::IncludeModule("sale")) {
		return;
	}
	$done = true;

	if (COption::GetOptionString("sale", "himopt_fax_disabled", "N") === "Y") {
		return;
	}

	$db = CSaleOrderProps::GetList(
		array(),
		array(),
		false,
		false,
		array("ID", "CODE", "NAME", "ACTIVE")
	);
	while ($prop = $db->Fetch()) {
		$code = strtoupper((string)$prop["CODE"]);
		$name = mb_strtolower((string)$prop["NAME"]);
		if ($code !== "FAX" && mb_strpos($name, "факс") === false && mb_strpos($name, "fax") === false) {
			continue;
		}
		if ($prop["ACTIVE"] === "Y") {
			CSaleOrderProps::Update($prop["ID"], array(
				"ACTIVE" => "N",
				"REQUIRED" => "N",
				"REQUIED" => "N",
			));
		}
	}

	COption::SetOptionString("sale", "himopt_fax_disabled", "Y");
}

/**
 * Disable Sberbank (квитанция) for физлица — stub handler + wrong receipt.
 * Idempotent via option flag; uses SQL (CSale* IDs drift after sale migrate).
 */
function himopt_order_disable_sberbank_phys()
{
	static $done = false;
	if ($done || !CModule::IncludeModule("sale")) {
		return;
	}
	$done = true;

	if (COption::GetOptionString("sale", "himopt_sberbank_phys_off", "N") === "Y") {
		return;
	}

	global $DB;
	// Drop handler rows for individuals (PT=1) / orphan PT=0
	$DB->Query("
		DELETE FROM b_sale_pay_system_action
		WHERE PERSON_TYPE_ID IN (0, 1)
			AND (
				ACTION_FILE LIKE '%sberbank%'
				OR UPPER(NAME) LIKE '%СБЕРБАНК%'
				OR UPPER(NAME) LIKE '%SBERBANK%'
			)
	");
	// Turn off pay system itself (was only for физлица)
	$DB->Query("
		UPDATE b_sale_pay_system
		SET ACTIVE = 'N'
		WHERE ACTIVE = 'Y'
			AND (
				UPPER(NAME) LIKE '%СБЕРБАНК%'
				OR UPPER(NAME) LIKE '%SBERBANK%'
			)
	");

	COption::SetOptionString("sale", "himopt_sberbank_phys_off", "Y");
}

/**
 * Normalize RU phone to digits starting with 7 (11 digits).
 * Returns empty string if invalid.
 */
function himopt_order_normalize_phone($value)
{
	$digits = preg_replace("/\D+/", "", (string)$value);
	if ($digits === "") {
		return "";
	}
	if (strlen($digits) === 11 && ($digits[0] === "8" || $digits[0] === "7")) {
		return "7".substr($digits, 1);
	}
	if (strlen($digits) === 10) {
		return "7".$digits;
	}
	return "";
}

function himopt_order_format_phone($digits7)
{
	if (strlen($digits7) !== 11 || $digits7[0] !== "7") {
		return $digits7;
	}
	return "+7 (".substr($digits7, 1, 3).") ".substr($digits7, 4, 3)."-".substr($digits7, 7, 2)."-".substr($digits7, 9, 2);
}

/**
 * Server-side phone check for sale.order.full (no format validation in component).
 */
function himopt_order_phone_guard()
{
	if (defined("ADMIN_SECTION") && ADMIN_SECTION === true) {
		return;
	}
	if (($_SERVER["REQUEST_METHOD"] ?? "") !== "POST") {
		return;
	}
	if (!empty($_REQUEST["BACK"]) && $_REQUEST["BACK"] === "Y") {
		return;
	}

	$page = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
	if (strpos($page, "/personal/order/make") === false) {
		return;
	}

	$step = intval($_REQUEST["CurrentStep"] ?? 0);
	if ($step <= 2) {
		return;
	}

	if (!CModule::IncludeModule("sale")) {
		return;
	}

	$personType = intval($_REQUEST["PERSON_TYPE"] ?? 0);
	if ($personType <= 0) {
		return;
	}

	$profileId = intval($_REQUEST["PROFILE_ID"] ?? 0);

	$db = CSaleOrderProps::GetList(
		array(),
		array(
			"PERSON_TYPE_ID" => $personType,
			"ACTIVE" => "Y",
			"CODE" => "PHONE",
		),
		false,
		false,
		array("ID", "NAME", "IS_PHONE", "REQUIRED", "REQUIED")
	);

	$error = "";
	while ($prop = $db->Fetch()) {
		$key = "ORDER_PROP_".$prop["ID"];
		$raw = isset($_REQUEST[$key]) ? trim((string)$_REQUEST[$key]) : "";
		$rawDigits = preg_replace("/\D+/", "", $raw);
		// Profile selected: phone lives in profile, form fields are hidden/empty in POST
		if (($raw === "" || $rawDigits === "" || $rawDigits === "7") && $profileId > 0) {
			$dbVal = CSaleOrderUserPropsValue::GetList(
				array(),
				array(
					"USER_PROPS_ID" => $profileId,
					"ORDER_PROPS_ID" => intval($prop["ID"]),
				),
				false,
				false,
				array("VALUE")
			);
			if ($row = $dbVal->Fetch()) {
				$raw = trim((string)$row["VALUE"]);
				$rawDigits = preg_replace("/\D+/", "", $raw);
			}
		}
		// "+7 (" placeholder without number
		if ($raw === "" || $rawDigits === "" || $rawDigits === "7") {
			$error = "Не заполнено поле \"".$prop["NAME"]."\".";
			break;
		}
		$norm = himopt_order_normalize_phone($raw);
		if ($norm === "") {
			$error = "Некорректный телефон. Укажите номер в формате +7 (999) 123-45-67.";
			break;
		}
		$formatted = himopt_order_format_phone($norm);
		$_REQUEST[$key] = $formatted;
		$_POST[$key] = $formatted;
	}

	if ($error !== "") {
		$GLOBALS["HIMOPT_ORDER_PHONE_ERROR"] = $error;
		$_REQUEST["CurrentStep"] = 2;
		$_POST["CurrentStep"] = 2;
	}
}

function himopt_order_phone_error_html()
{
	if (empty($GLOBALS["HIMOPT_ORDER_PHONE_ERROR"])) {
		return;
	}
	echo '<font class="errortext">'.htmlspecialcharsbx($GLOBALS["HIMOPT_ORDER_PHONE_ERROR"])."</font><br />";
}
