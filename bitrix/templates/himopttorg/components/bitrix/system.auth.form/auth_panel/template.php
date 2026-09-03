<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
if ($arResult["FORM_TYPE"] == "login"):
?>
<!--autorization-->
<form class="autorization" action="<?=$arResult["AUTH_URL"]?>" method="post">
<?if (strlen($arResult["BACKURL"]) > 0)
{?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
<?}?>
	<?foreach ($arResult["POST"] as $key => $value)
	{?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
	<?}?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	
	<p class="tit">Вход / <a href="<?=$arResult["AUTH_REGISTER_URL"]?>">Регистрация</a></p>
	<div class="log_passw">
		<p class="inp"><label for="log">Логин </label><input name="USER_LOGIN" type="text" class="field2" id="log" value="" /></p>
	</div>
	<div class="log_passw">
		<p class="inp"><label for="passw">Пароль</label><input name="USER_PASSWORD" type="password" class="field2" id="passw" value="" /></p>
	</div>
	<div class="enter clearfix">
		<div class="ch"><input type="checkbox" id="ch1" checked="checked" name="USER_REMEMBER" value="Y" /><span>Запомнить</span></div>
		<div class="btn_enter">										
			<input type="submit" value="" />					
		</div>
	</div>
	<p class="remaind"><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>">Напомнить пароль</a></p>
</form>
<!--/autorization-->

<?
else:
?>
<!--autorization-->
<form class="autorization" action="">
	<p class="welcome">Здравствуйте, <span><?
	$name = trim($USER->GetFullName());
	if (strlen($name) <= 0)
		$name = $USER->GetLogin();
		
	echo htmlspecialcharsEx($name);
?></span></p>								
	<p class="cab"><a href="<?=$arResult['PROFILE_URL']?>">Мой кабинет</a></p>
	<p class="ord"><a href="/personal/order/">Мои заказы</a></p>								
	<div class="enter clearfix">									
		<div class="btn_exit">										
			<input type="button" value="" onclick="document.location.href='<?=$APPLICATION->GetCurPageParam("logout=yes", Array("logout"))?>'" />					
		</div>
	</div>								
</form>
<!--/autorization-->
<?
endif;
?>