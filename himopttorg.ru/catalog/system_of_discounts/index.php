<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Система скидок");
$APPLICATION->SetPageProperty("description", "Узнать о системе скидок в компании ХИМОПТТОРГ");
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
	<h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h1> 
	<p>ХИМОПТТОРГ предоставляет скидки при покупке продукции по предварительной оплате на следующих условиях:</p>
<table border="1" cellpadding="5" width="80%" cellspacing="0">
<tr>
<td>Объем закупки, в руб.</td>
<td>Более 25 000</td>
<td>Более 50 000</td>
<td>Более 75 000</td>
<td>Более 100 000  </td>
</tr>
<tr>
<td>Размер скидки</td>
<td>2 %</td>
<td>3 %</td>
<td>4 %</td>
<td>5 %</td>
</tr>
</table>
<br />
<p>На продукцию аккумуляторы, шины грузовые, шины сельскохозяйственные, шины легковые, масло моторное, масло промышленное, масло трансмиссионное, электроды, известь хлорная, карбид кальция скидки не предоставляются.</p>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>