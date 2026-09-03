<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Личные данные");
?>

<div class="block">
	<?
	$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "-"
		),
		false,
		Array('HIDE_ICONS' => 'Y')
	);
	?>
	<?$APPLICATION->IncludeComponent("bitrix:main.profile", "template1", Array(
	"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
	),
	false
);?>
</div>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>