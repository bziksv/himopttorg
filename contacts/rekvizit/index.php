<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Реквизиты компании ХИМОПТТОРГ");
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
	<p>
 <strong>Общество с ограниченной ответственностью "ХИМОПТТОРГ" (ООО "ХИМОПТТОРГ")</strong>
	</p>
	<p>
		 Россия, 394033, Воронежская область, г. Воронеж, ул. Землячки, д. 21, оф. 302<br>
		 Тел: +7 (473) 223-19-11, 223-19-66, 223-18-14, 223-20-88<br>
		 Факс: +7 (473) 223-24-82, 223-06-11 <br>
		 E-mail: <a href="mailto:hot@hot.vrn.ru">hot@hot.vrn.ru</a>
	</p>
	<p>
		 ОГРН: 1103668039199<br>
		 ИНН: 3661051641<br>
		 КПП: 366101001
	</p>
	<p>
		 Центрально-Черноземный банк Сбербанка РФ г. Воронеж<br>
		 Р/с: № 40702810913000049946<br>
		 К/с: № 30101810600000000681<br>
		 БИК: 042007681
	</p>
	<p>
		 ОКВЭД: 51.70<br>
		 ОКПО: 10598642<br>
		 ОКАТО: 20401365000
	</p>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>