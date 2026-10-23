<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
ShowMessage($arParams["~AUTH_RESULT"]);
ShowMessage($arResult['ERROR_MESSAGE']);
?>
<form class="himopt-auth" action="<?=$arResult["AUTH_URL"]?>" method="post" name="form_auth">
<?if (strlen($arResult["BACKURL"]) > 0) {?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?}?>
<?foreach ($arResult["POST"] as $key => $value) {?>
	<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
<?}?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />

	<p class="himopt-auth-tit">
		<span class="himopt-auth-tit-cur">Вход</span>
		<span class="himopt-auth-tit-sep">/</span>
		<a href="<?=$arResult["AUTH_REGISTER_URL"]?>">Регистрация</a>
	</p>

	<div class="himopt-auth-row">
		<label for="himopt-auth-login">Логин</label>
		<input id="himopt-auth-login" type="text" name="USER_LOGIN" maxlength="50" value="<?=htmlspecialcharsbx($arResult["LAST_LOGIN"])?>" class="himopt-auth-field" autocomplete="username" />
	</div>
	<div class="himopt-auth-row">
		<label for="himopt-auth-pass">Пароль</label>
		<input id="himopt-auth-pass" type="password" name="USER_PASSWORD" maxlength="50" class="himopt-auth-field" autocomplete="current-password" />
	</div>
<?if ($arResult["STORE_PASSWORD"] == "Y") {?>
	<label class="himopt-auth-remember" for="himopt-auth-remember">
		<input type="checkbox" id="himopt-auth-remember" name="USER_REMEMBER" value="Y" checked="checked" class="himopt-keep-check" />
		<span>Запомнить меня</span>
	</label>
<?}?>
	<div class="himopt-order-actions">
		<input type="submit" class="himopt-order-btn" name="Login" value="<?=GetMessage("AUTH_AUTHORIZE")?>" />
	</div>
	<p class="himopt-auth-links">
		<a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>">Напомнить пароль</a>
	</p>
</form>
<script type="text/javascript">
<?if (strlen($arResult["LAST_LOGIN"]) > 0) {?>
try{document.form_auth.USER_PASSWORD.focus();}catch(e){}
<?} else {?>
try{document.form_auth.USER_LOGIN.focus();}catch(e){}
<?}?>
</script>
