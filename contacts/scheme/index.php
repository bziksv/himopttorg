<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Схема проезда в Воронеже");
$APPLICATION->SetPageProperty("description", "Узнать, как проехать до компании ХИМОПТТОРГ в Воронеже");
?><div class="block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	".default",
	Array(
		"PATH" => "",
		"SITE_ID" => "-",
		"START_FROM" => "1"
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?>
	<h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h1>



<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abfa97fa13332bf634b4190b1194f68d66e3949f4a3d399e5187e4b67f78e11e9&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>



</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>