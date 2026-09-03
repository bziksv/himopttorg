<?
$MESS ['ASKARON_PRO1C_MODULE_NAME'] = "Advanced exchange with 1C";
$MESS ['ASKARON_PRO1C_MODULE_DESCRIPTION'] = "Module can dramatically speed up the exchange of standard 1C, only update prices and residues monitor the exchange of real-time in Live log, have a log file for error analysis and performance, configure failover for exchange and see information about recent exchanges.";
$MESS ['ASKARON_PRO1C_PARTNER_NAME'] = "Askaron Systems";
$MESS ['ASKARON_PRO1C_SITE_URI']= "http://askaron.ru";
$MESS ['ASKARON_PRO1C_NEED_RIGHT_VER'] = "This solution needs main module version #NEED# or newer.";
$MESS ['ASKARON_PRO1C_NEED_MODULES'] = "This solution needs module #MODULE#.";

$MESS ['ASKARON_PRO1C_INSTALL_TITLE'] = "Installing the \"Debug exchange with 1C\"";
$MESS ['ASKARON_PRO1C_UNINSTALL_TITLE'] = "Removing the \"Debug exchange with 1C\"";

$MESS ['ASKARON_PRO1C_INSTALL_TABLE_ERROR'] = "Error when creating a table";
$MESS ['ASKARON_PRO1C_ONLY_MYSQL_ERROR'] = "This solution uses only MySQL database. Contact authors if you have MSSQL or Oracle.";
$MESS ['ASKARON_PRO1C_SAVE_COMPONENTS'] = "Save all of the components associated with the module";
$MESS ['ASKARON_PRO1C_SAVE_DATABASE_SETTINGS_OF_MODULE'] = "Save the settings from the database associated with the module";
$MESS ['ASKARON_PRO1C_BUTTON_DELETE_COMPONENTS'] = "Delete";

$MESS ['ASKARON_PRO1C_SETTINGS_PAGE'] = "Settings page";


$MESS ['askaron_pro1c_install_delete_tables'] = "Если флажок снять, то будут удалены таблицы модуля b_askaron_pro1c_*";
$MESS ['askaron_pro1c_install_main_database'] = "Главная база";
$MESS ['askaron_pro1c_install_database_help'] =
	'Модуль содержит таблицы для аналитики обмена с 1С. В некоторых случаях удобно, чтобы таблицы модуля находились не в основной базе данных сайта, а в другой.
	<br><br>
	Вы можете указать в файле /bitrix/.settings.php в поле «connections->value»
	<a target="_blank" href="https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=2379">несколько подключений</a>, и выбрать из них базу,
	где модуль будет хранить таблицы, без необходимости использовать модуль веб-кластер из самых дорогих редакций 1С-Битрикс.
	<br><br>
	Для большинства пользователей советуем хранить таблицы в основной базе сайта <strong>default.</strong>
	В будущем, при необходимости, вы сможете переустановить модуль и выбрать другую базу.';
$MESS ['askaron_pro1c_install_select_database'] = "Выберите подключение к базе данных:";

