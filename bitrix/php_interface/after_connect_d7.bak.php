<?
$connection = \Bitrix\Main\Application::getConnection();
$connection->queryExecute("SET NAMES 'cp1251'");
$connection->queryExecute("SET wait_timeout=28800");
$connection->queryExecute("SET session wait_timeout=28800");
?>