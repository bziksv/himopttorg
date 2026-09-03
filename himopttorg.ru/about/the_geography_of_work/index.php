<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("География работы");
?>

<div class="block pl15">
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
	<div class="map">
		<ul class="addnav2">										
			<li><a href="/about/the_geography_of_work/" class="active">География работ</a></li>
			<li><a href="/about/partners/">Партнерам</a></li>
			<li><a href="/about/branches_himopttorg/">Филиалы</a></li>
			<li><a href="/about/jobs/">Вакансии</a></li>
			<li><a href="/contacts/our_team/">Наша команда</a></li>
			<li><a href="/contacts/feedback/">Обратная связь</a></li>
			<li><a href="/contacts/rekvizit/">Реквизиты</a></li>							
		</ul>
	</div>
</div>				

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>