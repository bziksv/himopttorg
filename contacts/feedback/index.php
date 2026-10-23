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
	<form method="post" style="width:343px;" action="/contacts/feedback/?send=yes" id="feedback-form">
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
 <label for="fb-name">ФИО </label><input name="name" class="field2" id="fb-name" type="text" value="<?=htmlspecialcharsbx((string)($_POST['name'] ?? ''))?>">
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="fb-company">Компания </label><input name="company" class="field2" id="fb-company" type="text" value="<?=htmlspecialcharsbx((string)($_POST['company'] ?? ''))?>">
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="fb-mail">E-mail </label><input name="mail" class="field2" id="fb-mail" type="text" value="<?=htmlspecialcharsbx((string)($_POST['mail'] ?? ''))?>">
			</p>
		</div>
		<div class="log_passw2">
			<p class="inp">
 <label for="fb-phone">Телефон</label><input name="phone" class="field2" id="fb-phone" type="text" value="<?=htmlspecialcharsbx((string)($_POST['phone'] ?? ''))?>">
			</p>
		</div>
		<div class="log_passw2">
			<p>
 <label for="fb-msg">Сообщение</label><textarea id="fb-msg" class="area" cols="30" rows="10" name="msg" style="width: 270px; height: 150px;"><?=htmlspecialcharsbx((string)($_POST['msg'] ?? ''))?></textarea>
			</p>
		</div>
		<?php if (function_exists("himopt_consent_html")) { himopt_consent_html(); } ?>
		<div class="enter clearfix" style="margin-top:12px;">
			<div>
 <input name="Register" value="Отправить" type="submit" class="himopt-need-consent" disabled>
			</div>
		</div>
	</form>
</div>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>