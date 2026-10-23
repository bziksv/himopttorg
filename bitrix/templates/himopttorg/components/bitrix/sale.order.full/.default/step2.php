<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
function PrintPropsForm($arSource=Array(), $PRINT_TITLE = "", $arParams)
{
	if (!empty($arSource))
	{
		if (strlen($PRINT_TITLE) > 0)
		{
			?>
			<b><?= $PRINT_TITLE ?></b><br /><br />
			<?
		}
		?>
		<table class="sale_order_full_table">
		<?
		foreach($arSource as $arProperties)
		{
			$code = strtoupper(trim((string)($arProperties["CODE"] ?? "")));
			$nameLow = function_exists("mb_strtolower")
				? mb_strtolower((string)$arProperties["NAME"], "UTF-8")
				: strtolower((string)$arProperties["NAME"]);
			$isZip = ($arProperties["IS_ZIP"] ?? "") === "Y" || $code === "ZIP" || $nameLow === "индекс";
			$isFax = $code === "FAX" || $nameLow === "факс";
			$isLocation = ($arProperties["IS_LOCATION"] ?? "") === "Y" || $code === "LOCATION" || $nameLow === "местоположение";
			if ($isZip || $isFax || $isLocation) {
				continue;
			}
			$isPhone = ($arProperties["IS_PHONE"] ?? "") === "Y" || $code === "PHONE" || $nameLow === "телефон";

			if($arProperties["SHOW_GROUP_NAME"] == "Y")
			{
				?>
				<tr>
					<td colspan="2" align="center">
						<b><?= $arProperties["GROUP_NAME"] ?></b>
					</td>
				</tr>
				<?
			}
			?>
			<tr<?= $isPhone ? ' class="himopt-order-prop himopt-order-prop--phone"' : ' class="himopt-order-prop"' ?>>
				<td align="right" valign="top">
					<?= $arProperties["NAME"] ?>:<?
					if($arProperties["REQUIED_FORMATED"]=="Y")
					{
						?><span class="sof-req">*</span><?
					}
					?>
				</td>
				<td>
					<?
					if($arProperties["TYPE"] == "CHECKBOX")
					{
						?>
						<input type="checkbox" name="<?=$arProperties["FIELD_NAME"]?>" value="Y"<?if ($arProperties["CHECKED"]=="Y") echo " checked";?>>
						<?
					}
					elseif($arProperties["TYPE"] == "TEXT")
					{
						$phoneClass = $isPhone ? " himopt-order-phone himopt-auth-field" : " himopt-auth-field";
						$phoneAttrs = $isPhone
							? ' inputmode="tel" autocomplete="tel" placeholder="+7 (___) ___-__-__" maxlength="18"'
							: "";
						?>
						<input type="text" maxlength="250" size="<?=$arProperties["SIZE1"]?>" value="<?=$arProperties["VALUE"]?>" name="<?=$arProperties["FIELD_NAME"]?>" class="<?=trim($phoneClass)?>"<?=$phoneAttrs?>>
						<?
						if ($isPhone)
						{
							?>
							<div class="himopt-phone-hint">Формат: +7 (999) 123-45-67</div>
							<div class="himopt-phone-error" hidden>Укажите корректный номер телефона</div>
							<?
						}
					}
					elseif($arProperties["TYPE"] == "SELECT")
					{
						?>
						<select name="<?=$arProperties["FIELD_NAME"]?>" size="<?=$arProperties["SIZE1"]?>">
						<?
						foreach($arProperties["VARIANTS"] as $arVariants)
						{
							?>
							<option value="<?=$arVariants["VALUE"]?>"<?if ($arVariants["SELECTED"] == "Y") echo " selected";?>><?=$arVariants["NAME"]?></option>
							<?
						}
						?>
						</select>
						<?
					}
					elseif ($arProperties["TYPE"] == "MULTISELECT")
					{
						?>
						<select multiple name="<?=$arProperties["FIELD_NAME"]?>" size="<?=$arProperties["SIZE1"]?>">
						<?
						foreach($arProperties["VARIANTS"] as $arVariants)
						{
							?>
							<option value="<?=$arVariants["VALUE"]?>"<?if ($arVariants["SELECTED"] == "Y") echo " selected";?>><?=$arVariants["NAME"]?></option>
							<?
						}
						?>
						</select>
						<?
					}
					elseif ($arProperties["TYPE"] == "TEXTAREA")
					{
						$isDeliveryAddr = $code === "ADDRESS" || $nameLow === "адрес доставки";
						?>
						<textarea rows="<?=$arProperties["SIZE2"]?>" cols="<?=$arProperties["SIZE1"]?>" name="<?=$arProperties["FIELD_NAME"]?>" class="himopt-auth-field himopt-order-textarea"><?=$arProperties["VALUE"]?></textarea>
						<?
						if ($isDeliveryAddr)
						{
							?><div class="himopt-phone-hint">Нужен только если на следующем шаге выберете доставку курьером. При самовывозе можно не заполнять.</div><?
						}
					}
					elseif ($arProperties["TYPE"] == "LOCATION")
					{
						$value = 0;
						foreach ($arProperties["VARIANTS"] as $arVariant) 
						{
							if ($arVariant["SELECTED"] == "Y") 
							{
								$value = $arVariant["ID"]; 
								break;
							}
						}
						
						if ($arParams["USE_AJAX_LOCATIONS"] == "Y"):
							$GLOBALS["APPLICATION"]->IncludeComponent(
								'bitrix:sale.ajax.locations', 
								'', 
								array(
									"AJAX_CALL" => "N", 
									"COUNTRY_INPUT_NAME" => "COUNTRY_".$arProperties["FIELD_NAME"],
									"CITY_INPUT_NAME" => $arProperties["FIELD_NAME"],
									"CITY_OUT_LOCATION" => "Y",
									"ALLOW_EMPTY_CITY" => $arParams["ALLOW_EMPTY_CITY"],
									"LOCATION_VALUE" => $value,
								),
								null,
								array('HIDE_ICONS' => 'Y')
							);
						else:
						?>
						<select name="<?=$arProperties["FIELD_NAME"]?>" size="<?=$arProperties["SIZE1"]?>">
						<?
						foreach($arProperties["VARIANTS"] as $arVariants)
						{
							?>
							<option value="<?=$arVariants["ID"]?>"<?if ($arVariants["SELECTED"] == "Y") echo " selected";?>><?=$arVariants["NAME"]?></option>
							<?
						}
						?>
						</select>
						<?
						endif;
					}
					elseif ($arProperties["TYPE"] == "RADIO")
					{
						foreach($arProperties["VARIANTS"] as $arVariants)
						{
							?>
							<input type="radio" name="<?=$arProperties["FIELD_NAME"]?>" id="<?=$arProperties["FIELD_NAME"]?>_<?=$arVariants["ID"]?>" value="<?=$arVariants["VALUE"]?>"<?if($arVariants["CHECKED"] == "Y") echo " checked";?>> <label for="<?=$arProperties["FIELD_NAME"]?>_<?=$arVariants["ID"]?>"><?=$arVariants["NAME"]?></label><br />
							<?
						}
					}

					if (strlen($arProperties["DESCRIPTION"]) > 0)
					{
						?><br /><small style="font-size:11px;"><?echo $arProperties["DESCRIPTION"] ?></small><?
					}
					?>
					
				</td>
			</tr>
			<?
		}
		?>
		</table>
		<?
		return true;
	}
	return false;
}
?>
<table class="himopt-order-step2" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td class="himopt-order-step2-main" valign="top">
			<?
			$bPropsPrinted = PrintPropsForm($arResult["PRINT_PROPS_FORM"]["USER_PROPS_N"], GetMessage("SALE_INFO2ORDER"), $arParams);

			if(!empty($arResult["USER_PROFILES"]))
			{
				if ($bPropsPrinted)
					echo "<br />";
				?>
				<b><?echo GetMessage("STOF_PROFILES")?></b><br /><br />
				<table class="sale_order_full_table">
					<tr>
						<td colspan="2">
							<?= GetMessage("SALE_PROFILES_PROMT")?>:
							<script language="JavaScript">
							function SetContact(enabled)
							{
								if(enabled)
									document.getElementById('sof-prof-div').style.display="block";
								else
									document.getElementById('sof-prof-div').style.display="none";
							}
							</script>
						</td>
					</tr>
					<?
					foreach($arResult["USER_PROFILES"] as $arUserProfiles)
					{
						?>
						<tr>
							<td valign="top" width="0%">
								<input type="radio" name="PROFILE_ID" id="ID_PROFILE_ID_<?= $arUserProfiles["ID"] ?>" value="<?= $arUserProfiles["ID"];?>"<?if ($arUserProfiles["CHECKED"]=="Y") echo " checked";?> onClick="SetContact(false)">
							</td>
							<td valign="top" width="100%">
								<label for="ID_PROFILE_ID_<?= $arUserProfiles["ID"] ?>">
								<b><?=$arUserProfiles["NAME"]?></b><br />
								<table>
								<?
								foreach($arUserProfiles["USER_PROPS_VALUES"] as $arUserPropsValues)
								{
									$propMeta = $arResult["PRINT_PROPS_FORM"]["USER_PROPS_Y"][$arUserPropsValues["ORDER_PROPS_ID"]] ?? null;
									$propCode = strtoupper((string)($propMeta["CODE"] ?? ""));
									$propNameLow = function_exists("mb_strtolower")
										? mb_strtolower((string)($propMeta["NAME"] ?? ""), "UTF-8")
										: strtolower((string)($propMeta["NAME"] ?? ""));
									if ($propCode === "ADDRESS" || $propNameLow === "адрес доставки" || $propCode === "FAX" || $propNameLow === "факс") {
										continue;
									}
									if (strlen($arUserPropsValues["VALUE_FORMATED"]) > 0)
									{
										?>
										<tr>
											<td><?=$propMeta["NAME"]?>:</td>
											<td><?=$arUserPropsValues["VALUE_FORMATED"]?></td>
										</tr>
										<?
									}
								}
								?>
								</table>
								</label>
							</td>
						</tr>
						<?
					}
					?>
					<tr>
						<td width="0%">
							<input type="radio" name="PROFILE_ID" id="ID_PROFILE_ID_0" value="0"<?if ($arResult["PROFILE_ID"]=="0") echo " checked";?> onClick="SetContact(true)">
						</td>
						<td width="100%"><b><label for="ID_PROFILE_ID_0"><?echo GetMessage("SALE_NEW_PROFILE")?></label></b><br /></td>
					</tr>
				</table>
				<br />
				<?
			}
			else
			{
				?><input type="hidden" name="PROFILE_ID" value="0"><?
			}
			?>
			<div id="sof-prof-div">
			<?
			PrintPropsForm($arResult["PRINT_PROPS_FORM"]["USER_PROPS_Y"], GetMessage("SALE_NEW_PROFILE_TITLE"), $arParams);
			?>
			</div>
			<?
			if ($arResult["USER_PROFILES_TO_FILL"]=="Y")
			{
				?>
				<script language="JavaScript">
					SetContact(<?echo ($arResult["USER_PROFILES_TO_FILL_VALUE"]=="Y" || $arResult["PROFILE_ID"] == "0")?"true":"false";?>);
				</script>
				<?
			}
			?>
			<?
			// Hidden location (Воронеж) — поле скрыто, нужно чтобы шаг доставки не пропускался
			$himoptLocId = 0;
			if (!empty($arResult["PRINT_PROPS_FORM"]["USER_PROPS_Y"])) {
				foreach ($arResult["PRINT_PROPS_FORM"]["USER_PROPS_Y"] as $p) {
					if (($p["IS_LOCATION"] ?? "") === "Y" || strtoupper((string)($p["CODE"] ?? "")) === "LOCATION") {
						$himoptLocId = intval($p["ID"]);
						break;
					}
				}
			}
			if ($himoptLocId <= 0 && !empty($arResult["PRINT_PROPS_FORM"]["USER_PROPS_N"])) {
				foreach ($arResult["PRINT_PROPS_FORM"]["USER_PROPS_N"] as $p) {
					if (($p["IS_LOCATION"] ?? "") === "Y" || strtoupper((string)($p["CODE"] ?? "")) === "LOCATION") {
						$himoptLocId = intval($p["ID"]);
						break;
					}
				}
			}
			if ($himoptLocId <= 0) {
				$himoptLocId = (intval($arResult["PERSON_TYPE"] ?? 0) === 2) ? 18 : 5;
			}
			$himoptLocVal = !empty($arResult["POST"]["ORDER_PROP_".$himoptLocId])
				? $arResult["POST"]["ORDER_PROP_".$himoptLocId]
				: "1029";
			?>
			<input type="hidden" name="ORDER_PROP_<?=$himoptLocId?>" value="<?=htmlspecialcharsbx($himoptLocVal)?>">
			<div class="himopt-order-actions himopt-order-actions--row">
			<?if(!($arResult["SKIP_FIRST_STEP"] == "Y"))
			{
				?>
				<input type="submit" onclick="document.order_form.CurrentStep.value='1'; document.order_form.BACK.value='Y'; document.order_form.submit();" style="cursor:pointer;border:0;width:75px;height:27px;background: url(<?=SITE_TEMPLATE_PATH?>/images/btn-prev.png) no-repeat;" value="">
				<?
			}
			?>
				<input type="submit" name="contButton" style="cursor:pointer;border:0;width:123px;height:27px;background: url(<?=SITE_TEMPLATE_PATH?>/images/btn-next.png) no-repeat;" value="">
			</div>
		</td>
		<td class="himopt-order-step2-note" valign="top">
			<?echo GetMessage("STOF_CORRECT_NOTE")?>
		</td>
	</tr>
</table>