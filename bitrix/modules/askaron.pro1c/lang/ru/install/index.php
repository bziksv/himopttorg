<?
$MESS ['ASKARON_PRO1C_MODULE_NAME'] = "Продвинутый обмен с 1С";
$MESS ['ASKARON_PRO1C_MODULE_DESCRIPTION'] = "Модуль позволяет радикально ускорить стандартный обмен с 1С, обновлять только цены и остатки, следить за ходом обмена в реальном времени в Живом логе, иметь лог-файл для анализа ошибок и производительности, настроить для отказоустойчивый обмен и видеть информацию о последних обменах";
$MESS ['ASKARON_PRO1C_PARTNER_NAME'] = "Аскарон системс";
$MESS ['ASKARON_PRO1C_SITE_URI']= "http://askaron.ru";
$MESS ['ASKARON_PRO1C_NEED_RIGHT_VER'] = "Для установки данного решения необходима версия главного модуля #NEED# или выше.";
$MESS ['ASKARON_PRO1C_NEED_MODULES'] = "Для установки данного решения необходимо наличие модуля #MODULE#.";

$MESS ['ASKARON_PRO1C_INSTALL_TITLE'] = "Установка модуля «Продвинутый обмен с 1С»";
$MESS ['ASKARON_PRO1C_UNINSTALL_TITLE'] = "Удаление модуля «Продвинутый обмен с 1С»";

$MESS ['ASKARON_PRO1C_INSTALL_TABLE_ERROR'] = "Ошибка при создании таблиц";
$MESS ['ASKARON_PRO1C_ONLY_MYSQL_ERROR'] = "Модуль работает только с базой данных MySQL. Обратитесь к разработчикам модуля, если у вас MSSQL или Oracle.";
$MESS ['ASKARON_PRO1C_SAVE_COMPONENTS'] = "Сохранить все компоненты связанные с модулем";
$MESS ['ASKARON_PRO1C_SAVE_DATABASE_SETTINGS_OF_MODULE'] = "Сохранить настройки связанные с модулем";
$MESS ['ASKARON_PRO1C_BUTTON_DELETE_COMPONENTS'] = "Удалить";

$MESS ['ASKARON_PRO1C_SETTINGS_PAGE'] = "Страница настроек";

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



