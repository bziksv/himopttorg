<?php
/**
 * Вернуть остатки четырёх позиций, которые утром 03.09 расходились с 1С
 * (сайт был выше файла; выгрузка 14:55 перетёрла их вниз).
 *
 * Запуск на проде из корня сайта:
 *   php -d short_open_tag=1 scripts/restore-4-qty.php
 */

$root = getcwd();
if (!is_file($root."/bitrix/modules/main/include/prolog_before.php")) {
	$root = dirname(__DIR__);
}
if (!is_file($root."/bitrix/modules/main/include/prolog_before.php")) {
	fwrite(STDERR, "Не вижу корень сайта Bitrix. Запусти из public_html.\n");
	exit(1);
}

$_SERVER["DOCUMENT_ROOT"] = $root;
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("NO_AGENT_CHECK", true);
define("STOP_STATISTICS", true);

require $root."/bitrix/modules/main/include/prolog_before.php";

global $USER, $DB;
if (is_object($USER) && method_exists($USER, "Authorize")) {
	$USER->Authorize(1);
}

if (!CModule::IncludeModule("catalog")) {
	fwrite(STDERR, "Модуль catalog не подключился\n");
	exit(1);
}

$fix = [
	34892 => 290,
	48431 => 350,
	34269 => 3205.7,
	46479 => 80,
];

function himopt_qty_snap($ids)
{
	global $DB;
	$in = implode(",", array_map("intval", $ids));
	$rs = $DB->Query("
		SELECT e.ID, e.NAME, p.QUANTITY
		FROM b_iblock_element e
		JOIN b_catalog_product p ON p.ID = e.ID
		WHERE e.ID IN (".$in.")
	");
	$out = [];
	while ($r = $rs->Fetch()) {
		$out[(int)$r["ID"]] = $r;
	}
	return $out;
}

$ids = array_keys($fix);
$before = himopt_qty_snap($ids);

echo "BEFORE\n";
foreach ($fix as $id => $qty) {
	$now = isset($before[$id]) ? $before[$id]["QUANTITY"] : "?";
	$name = isset($before[$id]) ? $before[$id]["NAME"] : "";
	echo $id."\t".$now." → ".$qty."\t".$name."\n";
}

foreach ($fix as $id => $qty) {
	if (!CCatalogProduct::Update($id, ["QUANTITY" => $qty])) {
		fwrite(STDERR, "CCatalogProduct::Update failed id=".$id."\n");
		exit(1);
	}
	$q = (float)$qty;
	$DB->Query(
		"UPDATE b_catalog_store_product
		SET AMOUNT = ".$q."
		WHERE PRODUCT_ID = ".intval($id)." AND AMOUNT > 0"
	);
}

$after = himopt_qty_snap($ids);
echo "AFTER\n";
foreach ($fix as $id => $qty) {
	$now = isset($after[$id]) ? $after[$id]["QUANTITY"] : "?";
	$ok = abs((float)$now - (float)$qty) < 0.001 ? "ok" : "FAIL";
	echo $id."\t".$now."\t".$ok."\n";
}
