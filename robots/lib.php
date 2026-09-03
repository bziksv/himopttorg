<?
setlocale ( LC_ALL, 'ru_RU.UTF-8' );
include "configure.php";
define ( "MODULE_SYS", true );
include "class.database.php";
$dbc = new database ( );
$dbc->setConnectValue ( $dbhost, $dbname, $dbuser, $dbpass );
?>