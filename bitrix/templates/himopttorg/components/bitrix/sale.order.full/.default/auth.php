<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="himopt-order-auth">
	<div class="himopt-order-auth-col">
		<div class="himopt-auth">
			<p class="himopt-auth-tit">
				<span class="himopt-auth-tit-cur"><?echo GetMessage("STOF_2REG")?></span>
			</p>
			<form method="post" action="<?= $arParams["PATH_TO_ORDER"] ?>" name="order_auth_form">
				<p class="himopt-auth-lead"><?echo GetMessage("STOF_LOGIN_PROMT")?></p>
				<div class="himopt-auth-row">
					<label for="himopt-ord-login"><?echo GetMessage("STOF_LOGIN")?></label>
					<input id="himopt-ord-login" type="text" name="USER_LOGIN" maxlength="30" value="<?=$arResult["USER_LOGIN"]?>" class="himopt-auth-field" autocomplete="username">
				</div>
				<div class="himopt-auth-row">
					<label for="himopt-ord-pass"><?echo GetMessage("STOF_PASSWORD")?></label>
					<input id="himopt-ord-pass" type="password" name="USER_PASSWORD" maxlength="30" class="himopt-auth-field" autocomplete="current-password">
				</div>
				<p class="himopt-auth-links himopt-auth-links--left">
					<a href="<?=$arParams["PATH_TO_AUTH"]?>?forgot_password=yes&back_url=<?= urlencode($arParams["PATH_TO_ORDER"]); ?>"><?echo GetMessage("STOF_FORGET_PASSWORD")?></a>
				</p>
				<div class="himopt-order-actions">
					<input type="submit" class="himopt-order-btn" value="<?echo GetMessage("STOF_NEXT_STEP")?>">
					<input type="hidden" name="do_authorize" value="Y">
				</div>
			</form>
		</div>
	</div>

<?if($arResult["AUTH"]["new_user_registration"]=="Y"):?>
	<div class="himopt-order-auth-col">
		<div class="himopt-auth himopt-auth--wide">
			<p class="himopt-auth-tit">
				<span class="himopt-auth-tit-cur"><?echo GetMessage("STOF_2NEW")?></span>
			</p>
			<form method="post" action="<?= $arParams["PATH_TO_ORDER"]?>" name="order_reg_form">
				<div class="himopt-auth-row">
					<label for="himopt-ord-name"><?echo GetMessage("STOF_NAME")?> <span class="sof-req">*</span></label>
					<input id="himopt-ord-name" type="text" name="NEW_NAME" value="<?=$arResult["POST"]["NEW_NAME"]?>" class="himopt-auth-field">
				</div>
				<div class="himopt-auth-row">
					<label for="himopt-ord-last"><?echo GetMessage("STOF_LASTNAME")?> <span class="sof-req">*</span></label>
					<input id="himopt-ord-last" type="text" name="NEW_LAST_NAME" value="<?=$arResult["POST"]["NEW_LAST_NAME"]?>" class="himopt-auth-field">
				</div>
				<div class="himopt-auth-row">
					<label for="himopt-ord-email">E-Mail <span class="sof-req">*</span></label>
					<input id="himopt-ord-email" type="text" name="NEW_EMAIL" value="<?=$arResult["POST"]["NEW_EMAIL"]?>" class="himopt-auth-field" autocomplete="email">
				</div>

			<?if($arResult["AUTH"]["new_user_registration_email_confirmation"] != "Y"):?>
				<div class="himopt-auth-opts">
					<label class="himopt-auth-radio" for="NEW_GENERATE_Y">
						<input type="radio" id="NEW_GENERATE_Y" name="NEW_GENERATE" value="Y" OnClick="ChangeGenerate(true)"<?if ($arResult["POST"]["NEW_GENERATE"] != "N") echo " checked";?> class="himopt-keep-check">
						<span><?echo GetMessage("STOF_SYS_PASSWORD")?></span>
					</label>
					<label class="himopt-auth-radio" for="NEW_GENERATE_N">
						<input type="radio" id="NEW_GENERATE_N" name="NEW_GENERATE" value="N" OnClick="ChangeGenerate(false)"<?if ($arResult["POST"]["NEW_GENERATE"] == "N") echo " checked";?> class="himopt-keep-check">
						<span><?echo GetMessage("STOF_MY_PASSWORD")?></span>
					</label>
					<div id="sof_choose_login" class="himopt-auth-nested">
						<div class="himopt-auth-row">
							<label for="himopt-ord-new-login"><?echo GetMessage("STOF_LOGIN")?> <span class="sof-req">*</span></label>
							<input id="himopt-ord-new-login" type="text" name="NEW_LOGIN" value="<?=$arResult["POST"]["NEW_LOGIN"]?>" class="himopt-auth-field" autocomplete="username">
						</div>
						<div class="himopt-auth-row">
							<label for="himopt-ord-new-pass"><?echo GetMessage("STOF_PASSWORD")?> <span class="sof-req">*</span></label>
							<input id="himopt-ord-new-pass" type="password" name="NEW_PASSWORD" class="himopt-auth-field" autocomplete="new-password">
						</div>
						<div class="himopt-auth-row">
							<label for="himopt-ord-new-pass2"><?echo GetMessage("STOF_RE_PASSWORD")?> <span class="sof-req">*</span></label>
							<input id="himopt-ord-new-pass2" type="password" name="NEW_PASSWORD_CONFIRM" class="himopt-auth-field" autocomplete="new-password">
						</div>
					</div>
					<script language="JavaScript">
					<!--
					ChangeGenerate(<?= (($arResult["POST"]["NEW_GENERATE"] != "N") ? "true" : "false") ?>);
					//-->
					</script>
				</div>
			<?endif;?>

			<?
			if($arResult["AUTH"]["captcha_registration"] == "Y")
			{
				?>
				<div class="himopt-auth-note"><?=GetMessage("CAPTCHA_REGF_TITLE")?></div>
				<div class="himopt-auth-captcha">
					<input type="hidden" name="captcha_sid" value="<?=$arResult["AUTH"]["capCode"]?>">
					<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["AUTH"]["capCode"]?>" width="180" height="40" alt="CAPTCHA">
				</div>
				<div class="himopt-auth-row">
					<label for="himopt-ord-captcha"><span class="sof-req">*</span> <?=GetMessage("CAPTCHA_REGF_PROMT")?></label>
					<input id="himopt-ord-captcha" type="text" name="captcha_word" maxlength="50" value="" class="himopt-auth-field">
				</div>
				<?
			}
			?>

				<?php if (function_exists("himopt_consent_html")) { himopt_consent_html(); } ?>
				<div class="himopt-order-actions">
					<input type="submit" class="himopt-order-btn himopt-need-consent" value="<?echo GetMessage("STOF_NEXT_STEP")?>" disabled>
					<input type="hidden" name="do_register" value="Y">
				</div>
			</form>
		</div>
	</div>
<?endif;?>
</div>

<p class="himopt-order-auth-note"><?echo GetMessage("STOF_REQUIED_FIELDS_NOTE")?></p>
<?if($arResult["AUTH"]["new_user_registration"]=="Y"):?>
<p class="himopt-order-auth-note"><?echo GetMessage("STOF_EMAIL_NOTE")?></p>
<?endif;?>
<?php if (function_exists("himopt_consent_error_html")) { himopt_consent_error_html(); } ?>
