<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
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
	<h3>Доставка продукции</h3>
	<p>
		 ХИМОПТТОРГ предоставляет услуги по доставке продукции до покупателя. Мы обеспечиваем оперативную доставку нашей продукции по г. Воронежу и Воронежской области, Центрально–Черноземному региону, а также в любую точку России:
	</p>
	<ul>
		<li>Автомобильным транспортом,</li>
		<li>Транспортно-экспедиционной компанией.</li>
	</ul>
	<p>
		 Стоимость доставки уточняйте у менеджеров по продажам при заказе продукции.
	</p>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>