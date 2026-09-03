<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вакансии");
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
 
  <p>Ваше резюме присылайте по электронной почте <a href="mailto:ok@hot.vrn.ru" >ok@hot.vrn.ru</a>. Если вы нас заинтересовали как ценный работник, то мы вас обязательно пригласим на собеседование. В нашей компании есть все условия для вашего развития и карьерного роста.</p>
 
  <div class="contact_tit up"> 
    <p>
      <br />
    </p>
   </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>