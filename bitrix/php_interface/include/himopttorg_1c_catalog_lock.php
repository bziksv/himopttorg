<?php
/**
 * Одна сессия 1С открывает два HTTP-запроса к 1c_exchange.php.
 * Оба пишут в b_xml_tree_import_1c: вторая на шаге 1 обнуляет таблицу,
 * первая дожимает дырявое дерево и отвечает success.
 *
 * Второй mode=import получает progress, пока жив первый.
 * checkauth / init / file не трогаем.
 */

define("HIMOPT_1C_LOCK_STALE", 240);

function himopttorg_1c_lock_file()
{
	$dir = rtrim($_SERVER["DOCUMENT_ROOT"], "/")."/bitrix/tmp";
	if (!is_dir($dir)) {
		@mkdir($dir, 0775, true);
	}
	return $dir."/himopttorg_1c_catalog.lock";
}

function himopttorg_1c_lock_sessid()
{
	$id = isset($_GET["sessid"]) ? (string)$_GET["sessid"] : "";
	if ($id === "" && isset($_REQUEST["sessid"])) {
		$id = (string)$_REQUEST["sessid"];
	}
	if ($id === "" && function_exists("bitrix_sessid")) {
		$id = (string)bitrix_sessid();
	}
	if ($id === "") {
		$id = (string)session_id();
	}
	return preg_replace("/[^a-zA-Z0-9]/", "", $id);
}

function himopttorg_1c_lock_log($action, $me, $extra = "")
{
	$line = date("Y-m-d H:i:s")." ".$action." sessid=".$me;
	if ($extra !== "") {
		$line .= " ".$extra;
	}
	$line .= " file=".(isset($_GET["filename"]) ? $_GET["filename"] : "")."\n";
	@file_put_contents(
		rtrim($_SERVER["DOCUMENT_ROOT"], "/")."/bitrix/tmp/himopttorg_1c_catalog.lock.log",
		$line,
		FILE_APPEND | LOCK_EX
	);
}

function himopttorg_1c_lock_read($fp)
{
	rewind($fp);
	$raw = stream_get_contents($fp);
	$data = $raw !== false && $raw !== "" ? json_decode($raw, true) : null;
	return is_array($data) ? $data : null;
}

function himopttorg_1c_lock_write($fp, array $data)
{
	rewind($fp);
	ftruncate($fp, 0);
	fwrite($fp, json_encode($data, JSON_UNESCAPED_UNICODE));
	fflush($fp);
}

function himopttorg_1c_catalog_unlock()
{
	$me = himopttorg_1c_lock_sessid();
	$path = himopttorg_1c_lock_file();
	$fp = @fopen($path, "c+");
	if (!$fp) {
		return;
	}
	flock($fp, LOCK_EX);
	$data = himopttorg_1c_lock_read($fp);
	if ($data && isset($data["sessid"]) && $data["sessid"] === $me) {
		ftruncate($fp, 0);
		himopttorg_1c_lock_log("release", $me);
	}
	flock($fp, LOCK_UN);
	fclose($fp);
}

function himopttorg_1c_catalog_guard()
{
	$script = isset($_SERVER["SCRIPT_NAME"]) ? $_SERVER["SCRIPT_NAME"] : "";
	if (!preg_match("~/(1c_exchange|askaron_pro1c_exchange)\\.php$~", $script)) {
		return;
	}
	$type = isset($_GET["type"]) ? $_GET["type"] : (isset($_REQUEST["type"]) ? $_REQUEST["type"] : "");
	if ($type !== "catalog") {
		return;
	}
	$mode = isset($_GET["mode"]) ? $_GET["mode"] : (isset($_REQUEST["mode"]) ? $_REQUEST["mode"] : "");
	if ($mode === "complete") {
		himopttorg_1c_catalog_unlock();
		return;
	}
	if ($mode !== "import") {
		return;
	}

	$me = himopttorg_1c_lock_sessid();
	if ($me === "") {
		return;
	}

	$path = himopttorg_1c_lock_file();
	$fp = @fopen($path, "c+");
	if (!$fp) {
		return;
	}

	flock($fp, LOCK_EX);
	$now = time();
	$data = himopttorg_1c_lock_read($fp);
	$holder = $data && isset($data["sessid"]) ? (string)$data["sessid"] : "";
	$ts = $data && isset($data["ts"]) ? (int)$data["ts"] : 0;
	$alive = $holder !== "" && ($now - $ts) < HIMOPT_1C_LOCK_STALE;

	if ($alive && $holder !== $me) {
		flock($fp, LOCK_UN);
		fclose($fp);
		himopttorg_1c_lock_log("wait", $me, "holder=".$holder);
		if (!headers_sent()) {
			header("Content-Type: text/plain; charset=utf-8");
		}
		echo "progress\n";
		echo "Каталог уже импортируется в другой сессии. Подождите.";
		die();
	}

	himopttorg_1c_lock_write($fp, [
		"sessid" => $me,
		"ts" => $now,
		"file" => isset($_GET["filename"]) ? (string)$_GET["filename"] : "",
	]);
	if (!$alive || $holder !== $me) {
		himopttorg_1c_lock_log("acquire", $me);
	}
	flock($fp, LOCK_UN);
	fclose($fp);
}

AddEventHandler("catalog", "OnSuccessCatalogImport1C", "himopttorg_1c_catalog_unlock");
AddEventHandler("catalog", "OnCompleteCatalogImport1C", "himopttorg_1c_catalog_unlock");
himopttorg_1c_catalog_guard();
