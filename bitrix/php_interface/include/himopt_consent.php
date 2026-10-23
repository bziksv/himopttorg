<?php

function himopt_consent_checked()
{
	return isset($_POST["RULE"]) && $_POST["RULE"] === "Y";
}

function himopt_consent_html($name = "RULE")
{
	static $n = 0;
	$n++;
	$id = "himopt-consent-".$n;
	?>
	<label class="himopt-consent" for="<?=htmlspecialcharsbx($id)?>">
		<input type="checkbox" id="<?=htmlspecialcharsbx($id)?>" name="<?=htmlspecialcharsbx($name)?>" value="Y" class="himopt-consent-check">
		<span>Даю <a href="/legal/consent/" target="_blank">согласие</a> на обработку персональных данных и принимаю <a href="/legal/personal-data/" target="_blank">политику обработки персональных данных</a>.</span>
	</label>
	<?php
}

function himopt_consent_error_html()
{
	if (empty($GLOBALS["HIMOPT_CONSENT_ERROR"])) {
		return;
	}
	echo '<p class="himopt-consent-error">Чтобы продолжить, дайте согласие на обработку персональных данных.</p>';
}

function himopt_consent_guard()
{
	if (defined("ADMIN_SECTION") && ADMIN_SECTION === true) {
		return;
	}
	if ($_SERVER["REQUEST_METHOD"] !== "POST") {
		return;
	}
	$uri = isset($_SERVER["REQUEST_URI"]) ? $_SERVER["REQUEST_URI"] : "";
	if (strpos($uri, "/personal/order/make") === false) {
		return;
	}

	$ok = himopt_consent_checked();

	if (isset($_POST["do_register"]) && $_POST["do_register"] === "Y" && !$ok) {
		unset($_POST["do_register"], $_REQUEST["do_register"]);
		$GLOBALS["HIMOPT_CONSENT_ERROR"] = true;
	}

	$step = isset($_POST["CurrentStep"]) ? (int)$_POST["CurrentStep"] : 0;
	$back = !empty($_POST["BACK"]);
	if ($step === 6 && !$back && !$ok) {
		$_POST["CurrentStep"] = 5;
		$_REQUEST["CurrentStep"] = 5;
		$GLOBALS["HIMOPT_CONSENT_ERROR"] = true;
	}
}
