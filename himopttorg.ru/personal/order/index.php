<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
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
<?$APPLICATION->IncludeComponent("bitrix:sale.personal.order", ".default", array(
	"PROP_1" => array(
	),
	"PROP_2" => array(
	),
	"SEF_MODE" => "N",
	"SEF_FOLDER" => "/personal/order/",
	"ORDERS_PER_PAGE" => $_GET["size"],
	"PATH_TO_PAYMENT" => "/personal/order/payment/",
	"PATH_TO_BASKET" => "/personal/cart/",
	"SET_TITLE" => "Y",
	"SAVE_IN_SESSION" => "Y"
	),
	false
);?> 
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>