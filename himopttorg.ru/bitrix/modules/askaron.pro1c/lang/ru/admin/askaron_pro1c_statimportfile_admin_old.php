<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");

if ( \Bitrix\Main\Config\Option::get( "askaron.pro1c", "connection_name" ) == "default" )
{
	LocalRedirect ("perfmon_table.php?lang=".LANGUAGE_ID."&table_name=b_askaron_pro1c_stat_import_file");
}
else
{
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
	$module_id = "askaron.pro1c";

	$install_status=CModule::IncludeModuleEx($module_id);

	global $APPLICATION;
	$APPLICATION->SetTitle( "Журнал обмена" );

	$RIGHT = $APPLICATION->GetGroupRight($module_id);
	if ($RIGHT == "D")
	{
		$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
	}

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

	CAdminMessage::ShowMessage(
		Array(
			"TYPE"=>"ERROR",
			"MESSAGE"=>"Данная страница работает только с соединением default. Соединение с базой выбирается при установке модуля.",
			"DETAILS"=>"",
			"HTML"=>true
		)
	);

	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
}
?>