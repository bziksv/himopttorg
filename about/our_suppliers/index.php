<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Наши поставщики");
?><div class="block">
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
	<p>ХИМОПТТОРГ является официальным представителем следующих производителей продукции:</p>
	<table class="partner">
		<tr>
			<td>
				<div class="partner_photo">
					<div class="photo_item"><img src="<?=SITE_TEMPLATE_PATH?>/images/kraski.jpg" width="134px" height="86px" alt="" /></div>
					<div class="photo_bord"></div>
				</div>
				<p>ОАО «РУССКИЕ КРАСКИ»<br /><small>г. Ярославль  - лакокра-<br/>сочная продукция</small></p>
			</td>
			
			<td>
				<div class="partner_photo">
					<div class="photo_item"><img src="<?=SITE_TEMPLATE_PATH?>/images/vati.jpg" width="134px" height="86px" alt="" /></div>
					<div class="photo_bord"></div>
				</div>
				<p>ОАО «ВАТИ»<br /><small>г. Волжский  - асбесто-<br/>технические изделия</small></p>
			</td>
		
			<td>
				<div class="partner_photo">
					<div class="photo_item"><img src="<?=SITE_TEMPLATE_PATH?>/images/ekos1.jpg" width="134px" height="86px" alt="" /></div>
					<div class="photo_bord"></div>
				</div>
				<p>ЗАО «ЭКОС-1» <br /><small>г. Москва – химические<br />реактивы и растворители</small></p>
			</td>
			<td></td>
			<td></td>
		</tr>
	</table>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>