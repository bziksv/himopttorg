<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<p>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
</p>
<p><?=GetMessage("AUTH_FORGOT_PASSWORD_1")?></p>
<form name="bform" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>" class="autorization">
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
	

		<div class="log_passw">
			<p class="inp"><label for="log"><?=GetMessage("AUTH_LOGIN")?> </label><input name="USER_LOGIN" type="text" class="field2" id="log" value="<?=$arResult["LAST_LOGIN"]?>" /></p>
		</div>
		<div class="log_passw">
			<p class="inp"><label for="log">E-Mail </label><input name="USER_EMAIL" type="text" class="field2" id="log" value="" /></p>
		</div>

		<div class="field field-button"><input type="submit" class="input-submit" name="send_account_info" value="<?=GetMessage("AUTH_SEND")?>" /></div>

<p><a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a></p> 
</form>
<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>