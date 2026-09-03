<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Заказы");
?><div class="block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "1",
		"USER_CONSENT" => "Y",
		"USER_CONSENT_ID" => "1",
		"USER_CONSENT_IS_CHECKED" => "Y",
		"USER_CONSENT_IS_LOADED" => "Y"
	),
false,
Array(
	'HIDE_ICONS' => 'Y'
)
);?> <?$APPLICATION->IncludeComponent(
	"bitrix:sale.order.full",
	".default",
	Array(
		"ALLOW_PAY_FROM_ACCOUNT" => "Y",
		"CITY_OUT_LOCATION" => "Y",
		"COUNT_DELIVERY_TAX" => "N",
		"COUNT_DISCOUNT_4_ALL_QUANTITY" => "N",
		"ONLY_FULL_PAY_FROM_ACCOUNT" => "N",
		"PATH_TO_AUTH" => "/login/",
		"PATH_TO_BASKET" => "/personal/cart/",
		"PATH_TO_PAYMENT" => "/personal/order/payment/",
		"PATH_TO_PERSONAL" => "/personal/order/",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "Y",
		"PROP_1" => array(0=>"6",),
		"PROP_2" => array(0=>"17",),
		"SEND_NEW_USER_NOTIFY" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_AJAX_DELIVERY_LINK" => "Y",
		"SHOW_MENU" => "Y",
		"USE_AJAX_LOCATIONS" => "N"
	)
);?>
</div>
 <input type="checkbox" id="rule" name="RULE" value="Y">
Нажимая на эту кнопку, я даю свое <a href="/legal/consent/">согласие</a> на обработку персональных данных и соглашаюсь с условиями <a href="/legal/personal-data/" target="_blank">политики обработки персональных данных</a>.
 <script>
 $(function(){
	 
	 
	 $('#rule').change(function(){
		 $('input[type="submit"]').attr('disabled',$(this).is(':checked') ? false : true);
	 });
	 
	 
 });
 
 </script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>