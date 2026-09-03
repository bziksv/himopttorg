<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?><?
//echo "<pre>"; print_r($arResult); echo "</pre>";
//exit();
//echo "<pre>"; print_r($_SESSION); echo "</pre>";

if ($arResult['DATA_SAVED'] == 'Y')
	echo ShowNote(GetMessage('PROFILE_DATA_SAVED'));
?>
<?$Update_date=substr($arResult["arUser"]["TIMESTAMP_X"],0,10);?>
<?$Update_time=substr($arResult["arUser"]["TIMESTAMP_X"],11,8);?>
<?$LastLogin_date=substr($arResult["arUser"]["LAST_LOGIN"],0,10);?>
<?$LastLogin_time=substr($arResult["arUser"]["LAST_LOGIN"],11,8);?>

<div class="dan-hold">
	<h1>Личные данные</h1>
	<span class="ob-text">— обозначены поля обязательные для заполнения</span>
</div>
<p class="tit"><a href="/personal/customer-profiles/">Мои профили</a></p>
<p class="tit">Регистрационная информация</p>
<p><?=ShowError($arResult["strProfileError"]);?></p>
<form class="autorization" style="width:auto;" name="form1" action="<?=$arResult["FORM_TARGET"]?>" method="post" enctype="multipart/form-data">
<?=$arResult["BX_SESSION_CHECK"]?>
<input type="hidden" name="lang" value="<?=LANG?>" />
<input type="hidden" name="ID" value="<?=$arResult["ID"]?>" />
<input type="hidden" name="LOGIN" value="<?=$arResult["arUser"]["LOGIN"]?>" />
<input type="hidden" name="EMAIL" value="<?=$arResult["arUser"]["EMAIL"]?>" />
<input type="hidden" name="save" value="<?=GetMessage("MAIN_SAVE")?>" />


<div class="log_passw1">
	<p class="inp1"><label for="log">Дата обновления:</label></p>
	<p class="inp2" style="background:none;margin:0;padding:0;"><?=$Update_date?> <?=$Update_time?></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Последняя авторизация:</label></p>
	<p class="inp2" style="background:none;margin:0;padding:0;"><?=$LastLogin_date?> <?=$LastLogin_time?></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Имя:*</label></p>
	<p class="inp2"><input name="NAME" type="text" class="field2" id="log" maxlength="50" value="<?=$arResult["arUser"]["NAME"]?>" /></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Фамилия:</label></p>
	<p class="inp2"><input name="LAST_NAME" type="text" class="field2" id="log" maxlength="50" value="<?=$arResult["arUser"]["LAST_NAME"]?>" /></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Отчество:</label></p>
	<p class="inp2"><input name="SECOND_NAME" type="text" class="field2" id="log" maxlength="50" value="<?=$arResult["arUser"]["SECOND_NAME"]?>" /></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Новый пароль:</label></p>
	<p class="inp2"><input name="NEW_PASSWORD" type="password" class="field2" id="log" value="" /></p>
</div>
<div class="log_passw1">
	<p class="inp1"><label for="log">Подтверждение пароля:</label></p>
	<p class="inp2"><input name="NEW_PASSWORD_CONFIRM" type="password" class="field2" id="log" value="" /></p>
</div>

<p class="count" style="clear:both;font-weight:bold;float:left;padding-left:58px;"><a href="#" class="btn-sbmt">Сохранить</a></p>

</form>
