<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Филиал ХИМОПТТОРГ");
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
 <br>
		 Обособленное подразделение г. Липецк:<br>
		 г. Липецк, Поперечный проезд, владение 3а, кабинет 3<br>
		 Телефон: + 7 (474) 231-05-05. <br>
 <br>
		
	</p>
</div>
<div id="s3gt_translate_tooltip" class="s3gt_translate_tooltip" style="position: absolute; left: 210px; top: 158px; opacity: 0.7;" is_mini="true">
	<div id="s3gt_translate_tooltip_mini_logo" class="s3gt_translate_tooltip_mini" title="Перевести выделенный фрагмент">
	</div>
	<div id="s3gt_translate_tooltip_mini_sound" class="s3gt_translate_tooltip_mini" title="Прослушать" title_play="Прослушать" title_stop="Остановить">
	</div>
	<div id="s3gt_translate_tooltip_mini_copy" class="s3gt_translate_tooltip_mini" title="Скопировать текст в буфер обмена">
	</div>
</div>
 <br>
<div id="s3gt_translate_tooltip" class="s3gt_translate_tooltip" style="position: absolute; left: 178px; top: 181px;" is_mini="true">
	<div id="s3gt_translate_tooltip_mini_logo" class="s3gt_translate_tooltip_mini" title="Перевести выделенный фрагмент">
	</div>
	<div id="s3gt_translate_tooltip_mini_sound" class="s3gt_translate_tooltip_mini" title="Прослушать" title_play="Прослушать" title_stop="Остановить">
	</div>
	<div id="s3gt_translate_tooltip_mini_copy" class="s3gt_translate_tooltip_mini" title="Скопировать текст в буфер обмена">
	</div>
</div>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>