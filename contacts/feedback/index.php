<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обратная связь");
$APPLICATION->SetPageProperty("description", "Оставить обратную связь о работе компании ХИМОПТТОРГ");
?><div class="block">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"COMPOSITE_FRAME_MODE" => "N",
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
);?>
	<h1><?$APPLICATION->ShowTitle(false);?><?$APPLICATION->ShowProperty("ADDITIONAL_TITLE", "");?></h1>
	 <?php

$error = '';
$message2 = '';

include 'feedback.php';

?>
	<form method="post" style="width:343px; " action="/contacts/feedback/?send=yes">
		 <? if ($error != ''){?>
		<div style="color:red;">
			 <?=$error?><br>
		</div>
		 <?}?> <? if ($message2 != ''){?>
		<div style="color:green;">
			 <?=$message2?><br>
		</div>
		 <?}?>
		<div class="log_passw2">
			<p class="inp">
 <label for="log">ФИО </label><input name="name" class="field2" id="log" title="Код PHP: &lt;?=$_POST['name']?&gt;" type="text"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"> </span></span>
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="log">Компания </label><input name="company" class="field2" id="log" title="Код PHP: &lt;?=$_POST['company']?&gt;" type="text"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"> </span></span>
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="log">E-mail </label><input name="mail" class="field2" id="log" title="Код PHP: &lt;?=$_POST['mail']?&gt;" type="text"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"> </span></span>
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="passw">Телефон</label><input name="phone" class="field2" id="passw" title="Код PHP: &lt;?=$_POST['phone']?&gt;" type="text"><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false"> </span></span>
			</p>
		</div>
		<div class="log_passw2">
			<p>
 <label for="passw">Сообщение</label><textarea id="t1" class="area" cols="30" rows="10" name="msg" style="width: 270px; height: 150px;"></textarea>
			</p>
		</div>
		<div class="enter clearfix">
		</div>
 <input style="position:unset;" type="checkbox" id="rule" name="RULE" value="Y">
		Нажимая на эту кнопку, я даю свое <a href="/legal/consent/">согласие</a> на обработку персональных данных, в соответствии с <a href="/legal/personal-data/" target="_blank">Политикой обработки персональных данных</a>&nbsp; <script>
 $(function(){
	 
	 
	 $('#rule').change(function(){
		 $('input[type="submit"]').attr('disabled',$(this).is(':checked') ? false : true);
	 });
	 
	 
 });
 
 </script>
	</form>
</div>
 <script>
 $(function(){
	 
	 
	 $('#rule').change(function(){
		 $('input[type="submit"]').attr('disabled',$(this).is(':checked') ? false : true);
	 });
	 
	 
 });
 
 </script> <br>
<div class="enter clearfix">
	<div>
 <input name="Register" value="Отправить" type="submit">
	</div>
</div>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>