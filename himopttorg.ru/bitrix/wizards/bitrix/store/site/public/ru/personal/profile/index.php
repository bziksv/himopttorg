<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("РќР°СЃС‚СЂРѕР№РєРё РїРѕР»СЊР·РѕРІР°С‚РµР»СЏ");
?><?$APPLICATION->IncludeComponent("bitrix:main.profile", ".default", Array(
	"SET_TITLE" => "Y",	// РЈСЃС‚Р°РЅР°РІР»РёРІР°С‚СЊ Р·Р°РіРѕР»РѕРІРѕРє СЃС‚СЂР°РЅРёС†С‹
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>