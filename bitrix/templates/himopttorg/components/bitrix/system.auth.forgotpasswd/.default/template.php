<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
<p class="himopt-auth-lead"><?=GetMessage("AUTH_FORGOT_PASSWORD_1")?></p>
<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="himopt-auth">
<?
if (strlen($arResult["BACKURL"]) > 0)
{
?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?
}
?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="SEND_PWD">

	<p class="himopt-auth-tit">
		<span class="himopt-auth-tit-cur">Напомнить пароль</span>
	</p>

	<div class="himopt-auth-row">
		<label for="himopt-fp-login"><?=GetMessage("AUTH_LOGIN")?></label>
		<input id="himopt-fp-login" type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="himopt-auth-field" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-fp-email">E-Mail</label>
		<input id="himopt-fp-email" type="text" name="USER_EMAIL" maxlength="255" value="" class="himopt-auth-field" />
	</div>

	<div class="himopt-order-actions">
		<input type="submit" class="himopt-order-btn" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" />
	</div>
	<p class="himopt-auth-links">
		<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><?=GetMessage("AUTH_AUTH")?></a>
	</p>
</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
