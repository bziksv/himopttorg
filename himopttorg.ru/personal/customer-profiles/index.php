<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои профили");
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
	<h1>Мои профили</h1>
	<?$APPLICATION->IncludeComponent("bitrix:sale.personal.profile", "profile", array(
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/personal/customer-profiles/",
	"PER_PAGE" => "20",
	"USE_AJAX_LOCATIONS" => "N",
	"SET_TITLE" => "Y"
	),
	false
);?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>