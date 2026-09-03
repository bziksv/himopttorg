<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Прайс-лист");
$APPLICATION->SetPageProperty("description", "Скачать прайс-лист на химическую продукцию компании ХИМОПТТОРГ");
?> 
<div class="block"> 	<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "-"
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?> 	 
  <h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h1>
 	 
  <p><a onclick="yaCounter9308620.reachGoal('download'); return true;" href="http://himopttorg.ru/upload/medialibrary/price/price.zip" >прайс-лист в формате ZIP архива</a></p>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>