<?php
$_SERVER["DOCUMENT_ROOT"] = dirname(__DIR__);
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
define("NO_AGENT_CHECK", true);
define("STOP_STATISTICS", true);

require $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php";

global $USER, $DB;
if (is_object($USER) && method_exists($USER, "Authorize")) {
	$USER->Authorize(1);
}

CModule::IncludeModule("iblock");
CModule::IncludeModule("catalog");

$ids = [34892, 48431, 34269, 46479];
$src = dirname(__DIR__)."/offers0_1.xml";
$dir = $_SERVER["DOCUMENT_ROOT"]."/upload/1c_catalog/";
CheckDirPath($dir);
$abs = $dir."offers0_1.xml";
copy($src, $abs);

function snap($ids)
{
	global $DB;
	$in = implode(",", array_map("intval", $ids));
	$rs = $DB->Query("SELECT e.ID, e.NAME, p.QUANTITY, p.TIMESTAMP_X FROM b_iblock_element e JOIN b_catalog_product p ON p.ID=e.ID WHERE e.ID IN (".$in.")");
	$out = [];
	while ($r = $rs->Fetch()) {
		$out[(int)$r["ID"]] = $r;
	}
	return $out;
}

$before = snap($ids);
echo "BEFORE\n";
foreach ($before as $r) {
	echo $r["ID"]."\t".$r["QUANTITY"]."\t".$r["TIMESTAMP_X"]."\t".$r["NAME"]."\n";
}

@unlink("/tmp/himopt-qty-hook.log");
AddEventHandler("catalog", "OnBeforeProductUpdate", static function ($ID, &$arFields) use ($ids) {
	if (!in_array((int)$ID, $ids, true)) {
		return;
	}
	$qty = array_key_exists("QUANTITY", $arFields) ? $arFields["QUANTITY"] : "UNSET";
	file_put_contents("/tmp/himopt-qty-hook.log", "id=".$ID." QUANTITY=".$qty."\n", FILE_APPEND);
});

$table = "b_xml_tree_import_1c";
$NS = ["STEP" => 1];
$params = [
	"files_dir" => $dir,
	"use_crc" => COption::GetOptionString("catalog", "1C_USE_CRC", "Y") !== "N",
	"preview" => false,
	"detail" => false,
	"use_offers" => COption::GetOptionString("catalog", "1C_USE_OFFERS", "N") === "Y",
	"force_offers" => false,
	"use_iblock_type_id" => COption::GetOptionString("catalog", "1C_USE_IBLOCK_TYPE_ID", "N") === "Y",
	"translit_on_add" => false,
	"translit_on_update" => false,
	"skip_root_section" => false,
	"table_name" => $table,
];
echo "use_crc=".($params["use_crc"] ? "Y" : "N")." use_offers=".($params["use_offers"] ? "Y" : "N")."\n";

$xml = new CIBlockXMLFile($table);
if (!$xml->initializeTemporaryTables()) {
	fwrite(STDERR, "init tables failed\n");
	exit(1);
}
echo "tables ok\n";

$fp = fopen($abs, "rb");
while (!$xml->ReadXMLToDatabase($fp, $NS, 30)) {
	echo "read pos=".$xml->GetFilePosition()."\n";
}
fclose($fp);
echo "file read\n";
if (!$xml->IndexTemporaryTables()) {
	fwrite(STDERR, "index failed\n");
	exit(1);
}
echo "indexed\n";

$ob = new CIBlockCMLImport;
$ob->InitEx($NS, $params);
$meta = $ob->ImportMetaData([1, 2], COption::GetOptionString("catalog", "1C_IBLOCK_TYPE", "catalog"), [COption::GetOptionString("catalog", "1C_SITE_LIST", "s1")]);
echo "metadata=".($meta === true ? "ok" : print_r($meta, true))." iblock=".($NS["IBLOCK_ID"] ?? "?")." bOffer=".(!empty($NS["bOffer"]) ? "Y" : "N")."\n";

$sectionMap = false;
$pricesMap = false;
$ob->ReadCatalogData($sectionMap, $pricesMap);
$_SESSION["BX_CML2_IMPORT"]["SECTION_MAP"] = $sectionMap;
$_SESSION["BX_CML2_IMPORT"]["PRICES_MAP"] = $pricesMap;

$totals = ["CRC" => 0, "ADD" => 0, "UPD" => 0, "DEA" => 0, "ERR" => 0, "NON" => 0];
$rounds = 0;
do {
	$ob = new CIBlockCMLImport;
	$ob->InitEx($NS, $params);
	$ob->ReadCatalogData($sectionMap, $pricesMap);
	$result = $ob->ImportElements(time(), 30);
	$rounds++;
	$sum = 0;
	foreach ($result as $k => $v) {
		$totals[$k] = ($totals[$k] ?? 0) + $v;
		$sum += $v;
	}
	echo "import round $rounds ".json_encode($result)." last_error=".$ob->LAST_ERROR."\n";
} while ($sum > 0 && $rounds < 40);

echo "TOTALS ".json_encode($totals)."\n";

$after = snap($ids);
echo "AFTER\n";
foreach ($after as $id => $r) {
	echo $r["ID"]."\t".$r["QUANTITY"]."\t".$r["TIMESTAMP_X"]."\twas ".$before[$id]["QUANTITY"]."\n";
}
echo "HOOK\n";
echo is_file("/tmp/himopt-qty-hook.log") ? file_get_contents("/tmp/himopt-qty-hook.log") : "(empty)\n";

$guids = [
	"26b12a79-12f3-11df-a3e2-000423dc246d",
	"473d9355-d95e-11ef-b752-3cecef887a53",
	"2b0f9b54-1158-11df-a3e2-000423dc246d",
	"3c255186-509d-11ef-b743-3cecef887a53",
];
echo "XML TREE (как Битрикс прочитал файл)\n";
foreach ($guids as $g) {
	$rs = $DB->Query("SELECT ID, NAME, VALUE, ATTRIBUTES FROM `".$table."` WHERE VALUE='".$DB->ForSql($g)."' LIMIT 5");
	while ($row = $rs->Fetch()) {
		echo "ID=".$row["ID"]." NAME=".$row["NAME"]." VALUE=".$row["VALUE"]."\n";
		$parent = (int)$row["ID"];
		$ch = $DB->Query("SELECT ID, NAME, VALUE, ATTRIBUTES FROM `".$table."` WHERE PARENT_ID=".$parent." AND (NAME LIKE '%оличеств%' OR NAME LIKE '%клад%' OR NAME='Наименование')");
		while ($c = $ch->Fetch()) {
			echo "  ".$c["NAME"]." = ".$c["VALUE"]." attr=".$c["ATTRIBUTES"]."\n";
		}
	}
}
