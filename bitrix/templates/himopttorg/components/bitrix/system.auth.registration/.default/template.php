<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y" && is_array($arParams["AUTH_RESULT"]) &&  $arParams["AUTH_RESULT"]["TYPE"] === "OK"):?>
<p><?echo GetMessage("AUTH_EMAIL_SENT")?></p>
<?else:?>

<?if($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
	<p><?echo GetMessage("AUTH_EMAIL_WILL_BE_SENT")?></p>
<?endif?>
<!--noindex-->
<form method="post" class="himopt-auth himopt-auth--wide" action="<?=$arResult["AUTH_URL"]?>" name="bform">
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

	<p class="himopt-auth-tit">
		<a href="/login/">Вход</a>
		<span class="himopt-auth-tit-sep">/</span>
		<span class="himopt-auth-tit-cur">Регистрация</span>
	</p>

	<div class="himopt-auth-row">
		<label for="himopt-reg-name"><?=GetMessage("AUTH_NAME")?></label>
		<input id="himopt-reg-name" type="text" name="USER_NAME" maxlength="50" value="<?=$arResult["USER_NAME"]?>" class="himopt-auth-field" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-reg-last"><?=GetMessage("AUTH_LAST_NAME")?></label>
		<input id="himopt-reg-last" type="text" name="USER_LAST_NAME" maxlength="50" value="<?=$arResult["USER_LAST_NAME"]?>" class="himopt-auth-field" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-reg-login"><?=GetMessage("AUTH_LOGIN_MIN")?></label>
		<input id="himopt-reg-login" type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["USER_LOGIN"]?>" class="himopt-auth-field" autocomplete="username" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-reg-pass"><?=GetMessage("AUTH_PASSWORD_REQ")?></label>
		<input id="himopt-reg-pass" type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" class="himopt-auth-field" autocomplete="new-password" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-reg-pass2"><?=GetMessage("AUTH_CONFIRM")?></label>
		<input id="himopt-reg-pass2" type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="himopt-auth-field" autocomplete="new-password" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-reg-email">E-Mail</label>
		<input id="himopt-reg-email" type="text" name="USER_EMAIL" maxlength="255" value="<?=$arResult["USER_EMAIL"]?>" class="himopt-auth-field" autocomplete="email" />
	</div>

<?// ********************* User properties ***************************************************?>
<?if($arResult["USER_PROPERTIES"]["SHOW"] == "Y"):?>
	<div class="himopt-auth-note"><?=strlen(trim($arParams["USER_PROPERTY_NAME"])) > 0 ? $arParams["USER_PROPERTY_NAME"] : GetMessage("USER_TYPE_EDIT_TAB")?></div>
	<?foreach ($arResult["USER_PROPERTIES"]["DATA"] as $FIELD_NAME => $arUserField):?>
	<div class="himopt-auth-row">
		<label>
			<?=$arUserField["EDIT_FORM_LABEL"]?><?if ($arUserField["MANDATORY"]=="Y"):?><span class="sof-req">*</span><?endif;?>
		</label>
		<?$APPLICATION->IncludeComponent(
			"bitrix:system.field.edit",
			$arUserField["USER_TYPE"]["USER_TYPE_ID"],
			array("bVarsFromForm" => $arResult["bVarsFromForm"], "arUserField" => $arUserField, "form_name" => "bform"), null, array("HIDE_ICONS"=>"Y"));?>
	</div>
	<?endforeach;?>
<?endif;?>
<?// ******************** /User properties ***************************************************

	/* CAPTCHA */
	if ($arResult["USE_CAPTCHA"] == "Y")
	{
		?>
	<div class="himopt-auth-row">
		<label for="himopt-reg-captcha"><?=GetMessage("CAPTCHA_REGF_PROMT")?></label>
		<input id="himopt-reg-captcha" type="text" name="captcha_word" maxlength="50" value="" class="himopt-auth-field" />
	</div>
	<div class="himopt-auth-captcha">
		<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
	</div>
		<?
	}
	/* CAPTCHA */
	?>

	<?php if (function_exists("himopt_consent_html")) { himopt_consent_html("USER_AGREE"); } ?>
	<div class="himopt-order-actions">
		<input onclick="yaCounter9308620.reachGoal('Register'); return true; _gaq.push(['_trackEvent','Register','click']);" type="submit" name="Register" class="himopt-order-btn himopt-need-consent" value="<?=GetMessage("AUTH_REGISTER")?>" disabled />
	</div>
</form>
<!--/noindex-->
<script type="text/javascript">
document.bform.USER_NAME.focus();
</script>

<?endif?>
