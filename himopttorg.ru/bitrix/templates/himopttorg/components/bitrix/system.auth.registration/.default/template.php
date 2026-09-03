<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<p>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
</p>
<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y" && is_array($arParams["AUTH_RESULT"]) &&  $arParams["AUTH_RESULT"]["TYPE"] === "OK"):?>
<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
<?else:?>

<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
	<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>
<!--noindex-->
<form method="post" class="autorization" style="width:343px; " action="<?=$arResult["AUTH_URL"]?>" name="bform">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="REGISTRATION" />
	
	<p class="tit"><a href="/login/">Вход</a>/ Регистрация</p>
	
	<div class="log_passw2">
		<p class="inp"><label for="log"><?=GetMessage("AUTH_NAME")?> </label><input name="USER_NAME" type="text" class="field2" id="log" value="<?=$arResult["USER_NAME"]?>" /></p>
	</div>
	<div class="log_passw2">
		<p class="inp"><label for="log"><?=GetMessage("AUTH_LAST_NAME")?> </label><input name="USER_LAST_NAME" type="text" class="field2" id="log" value="<?=$arResult["USER_LAST_NAME"]?>" /></p>
	</div>
	<div class="log_passw2">
		<p class="inp"><label for="log"><?=GetMessage("AUTH_LOGIN_MIN")?> </label><input name="USER_LOGIN" type="text" class="field2" id="log" value="<?=$arResult["USER_LOGIN"]?>" /></p>
	</div>
	<div class="log_passw2">
		<p class="inp"><label for="passw"><?=GetMessage("AUTH_PASSWORD_REQ")?></label><input name="USER_PASSWORD" type="password" class="field2" id="passw" value="<?=$arResult["USER_PASSWORD"]?>" /></p>
	</div>
	<div class="log_passw2">
		<p class="inp"><label for="passw"><?=GetMessage("AUTH_CONFIRM")?></label><input name="USER_CONFIRM_PASSWORD" type="password" class="field2" id="passw" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" /></p>
	</div>
	<div class="log_passw2">
		<p class="inp"><label for="log">E-Mail </label><input name="USER_EMAIL" type="text" class="field2" id="log" value="<?=$arResult["USER_EMAIL"]?>" /></p>
	</div>

<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<div class="field"><?=strLen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></div>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
	<div class="field">
		<label class="field-title">
			<?=$arUserField["EDIT_FORM_LABEL"]?><?if ($arUserField["MANDATORY"]=="Y"):?><span class="required">*</span><?endif;?>
		</label>
		<div class="form-input">
			<?$APPLICATION->IncludeComponent(
				"bitrix:system.field.edit",
				$arUserField["USER_TYPE"]["USER_TYPE_ID"],
				array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
		</div>
	</div>
	<?endforeach;?>
<?endif;?>
<?// ******************** /User properties ***************************************************

	/* CAPTCHA */
	if ($arResult["USE_CAPTCHA"] == "Y")
	{
		?>
			<div class="log_passw2">
				<p class="inp"><label for="log"><?=GetMessage("CAPTCHA_REGF_PROMT")?></label><input name="captcha_word" type="text" class="field2" id="log" value="" /></p>
			</div>
			<div class="log_passw2">
				<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
			</div>
			
			
		<?
	}
	/* CAPTCHA */
	?>


<div class="my-custom-agreement" style="display: flex; align-items: flex-start; gap: 10px; margin-bottom: 15px;">
   <input type="checkbox" name="USER_AGREE" id="user_agree" value="Y" required style="flex-shrink: 0; margin-top: 4px;" class=" outtaHere">
    <label style="font-size: 14px; line-height: 1.4; cursor: pointer;">
        <span>Нажимая на кнопку "Зарегистрироваться" я даю свое <a href="/legal/consent/" target="_blank">согласие</a> на обработку персональных данных и соглашаюсь с условиями <a target="_blank" href="/legal/personal-data/">политики обработки персональных данных.</a></span>
    </label>
</div>







	<div class="enter clearfix">
		<div class="">										
			<input onclick="yaCounter9308620.reachGoal('Register'); return true; _gaq.push(['_trackEvent','Register','click']);" type="submit" name="Register" value="<?=GetMessage("AUTH_REGISTER")?>" />					
		</div>
	</div>

</form>
<!--/noindex-->
<script type="text/javascript">
document.bform.USER_NAME.focus();
</script>

 <script>
 $(function(){
	 
	 
	 $('#rule').change(function(){
		 $('input[type="submit"]').attr('disabled',$(this).is(':checked') ? false : true);
	 });
	 
	 
 });
 
 </script>

<script>
(function() {
    // Ждём полной загрузки, чтобы все скрипты отработали
    window.addEventListener('load', function() {
        var container = document.querySelector('.my-custom-agreement');
        if (!container) return;

        // Находим старый чекбокс
        var oldCheckbox = container.querySelector('input[name="USER_AGREE"]');
        if (!oldCheckbox) return;

        // Создаём новый чекбокс с теми же атрибутами
        var newCheckbox = document.createElement('input');
        newCheckbox.type = 'checkbox';
        newCheckbox.name = 'USER_AGREE';
        newCheckbox.value = 'Y';
        newCheckbox.required = true; // обязательно для валидации
        // Копируем inline-стили, чтобы не нарушить вёрстку
        newCheckbox.style.cssText = oldCheckbox.style.cssText || 'flex-shrink:0; margin-top:4px;';
        // Добавляем стандартные стили для видимости (на всякий случай)
        newCheckbox.style.display = 'inline-block';
        newCheckbox.style.opacity = '1';
        newCheckbox.style.visibility = 'visible';

        // Заменяем старый чекбокс новым
        oldCheckbox.parentNode.replaceChild(newCheckbox, oldCheckbox);

        // Удаляем лишний div.checkboxArea, если он ещё есть в контейнере
        var wrapper = container.querySelector('.checkboxArea');
        if (wrapper) wrapper.remove();

        // Теперь чекбокс полностью стандартный, валидация должна работать
        // Проверим: при отправке формы, если чекбокс не отмечен, браузер покажет предупреждение.
    });
})();
</script>

<?endif?>