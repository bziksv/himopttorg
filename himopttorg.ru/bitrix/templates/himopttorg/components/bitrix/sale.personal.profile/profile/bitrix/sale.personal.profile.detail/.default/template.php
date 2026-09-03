<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<a name="tb"></a>
<a href="<?=$arParams["PATH_TO_LIST"]?>"><?=GetMessage("SPPD_RECORDS_LIST")?></a>
<br /><br />
<?if(strlen($arResult["ID"])>0):?>
	<?=ShowError($arResult["ERROR_MESSAGE"])?>
	<form method="post" action="<?=POST_FORM_ACTION_URI?>">
	<?=bitrix_sessid_post()?>
	<input type="hidden" name="ID" value="<?=$arResult["ID"]?>">
	
		<p><?= str_replace("#ID#", $arResult["ID"], GetMessage("SPPD_PROFILE_NO")) ?></p>
		<div class="row">
			<div class="lbox">
				<span><?echo GetMessage("SALE_PERS_TYPE")?>:</span>
			</div>
			<div class="rbox">
				<input type="text" id="i1" name="NAME" class="text" maxlength="50" value="<?=$arResult["PERSON_TYPE"]["NAME"]?>" />
			</div>
		</div>	
		<div class="row">
			<div class="lbox">
				<span><?echo GetMessage("SALE_PNAME")?>:<em>*</em></span>
			</div>
			<div class="rbox">
				<input type="text" name="NAME" id="i2" class="text" maxlength="50" value="<?echo $arResult["NAME"];?>" size="40" />
			</div>
		</div>

		<?
		foreach($arResult["ORDER_PROPS"] as $val)
		{
			if(!empty($val["PROPS"]))
			{
				?>
				<tr>
					<th colspan="2"><b><?=$val["NAME"];?></b></th>
				</tr>
				<?
				foreach($val["PROPS"] as $vval)
				{
					$currentValue = $arResult["ORDER_PROPS_VALUES"]["ORDER_PROP_".$vval["ID"]];
					$name = "ORDER_PROP_".$vval["ID"];
					?>
					<div class="row">
						<div class="lbox">
							<span><?=$vval["NAME"] ?>:
							<?if ($vval["REQUIED"]=="Y")
							{
								?><em>*</em><?
							}
							?>
							</span>
						</div>
						<div class="rbox">
							<?if ($vval["TYPE"]=="CHECKBOX"):?>
								<input type="hidden" name="<?=$name?>" value="">
								<input type="checkbox" name="<?=$name?>" value="Y"<?if ($currentValue=="Y" || !isset($currentValue) && $vval["DEFAULT_VALUE"]=="Y") echo " checked";?>>
							<?elseif ($vval["TYPE"]=="TEXT"):?>
								<input type="text" id="i2" class="text" maxlength="50" value="<?echo (isset($currentValue)) ? $currentValue : $vval["DEFAULT_VALUE"];?>" name="<?=$name?>">
							<?elseif ($vval["TYPE"]=="SELECT"):?>
								<select name="<?=$name?>" size="<?echo (IntVal($vval["SIZE1"])>0)?$vval["SIZE1"]:1; ?>">
									<?foreach($vval["VALUES"] as $vvval):?>
										<option value="<?echo $vvval["VALUE"]?>"<?if ($vvval["VALUE"]==$currentValue || !isset($currentValue) && $vvval["VALUE"]==$vval["DEFAULT_VALUE"]) echo " selected"?>><?echo $vvval["NAME"]?></option>
									<?endforeach;?>
								</select>
							<?elseif ($vval["TYPE"]=="MULTISELECT"):?>
								<select multiple name="<?=$name?>[]" size="<?echo (IntVal($vval["SIZE1"])>0)?$vval["SIZE1"]:5; ?>">
									<?
									$arCurVal = array();
									$arCurVal = explode(",", $currentValue);
									for ($i = 0; $i<count($arCurVal); $i++)
										$arCurVal[$i] = Trim($arCurVal[$i]);
									$arDefVal = Split(",", $vval["DEFAULT_VALUE"]);
									for ($i = 0; $i<count($arDefVal); $i++)
										$arDefVal[$i] = Trim($arDefVal[$i]);
									foreach($vval["VALUES"] as $vvval):?>
										<option value="<?echo $vvval["VALUE"]?>"<?if (in_array($vvval["VALUE"], $arCurVal) || !isset($currentValue) && in_array($vvval["VALUE"], $arDefVal)) echo" selected"?>><?echo $vvval["NAME"]?></option>
									<?endforeach;?>
								</select>
							<?elseif ($vval["TYPE"]=="TEXTAREA"):?>
								<input type="text" id="i2" class="text" maxlength="50" value="<?echo (isset($currentValue)) ? $currentValue : $vval["DEFAULT_VALUE"];?>" name="<?=$name?>">
							<?elseif ($vval["TYPE"]=="LOCATION"):?>
								<?if ($arParams['USE_AJAX_LOCATIONS'] == 'Y'):
									$APPLICATION->IncludeComponent('bitrix:sale.ajax.locations', '', array(
											"AJAX_CALL" => "N", 
											'CITY_OUT_LOCATION' => 'Y',
											'COUNTRY_INPUT_NAME' => $name.'_COUNTRY',
											'CITY_INPUT_NAME' => $name,
											'LOCATION_VALUE' => isset($currentValue) ? $currentValue : $vval["DEFAULT_VALUE"],
										),
										null,
										array('HIDE_ICONS' => 'Y')
									);
								else:
								?>
								<select name="<?=$name?>" size="<?echo (IntVal($vval["SIZE1"])>0)?$vval["SIZE1"]:1; ?>">
									<?foreach($vval["VALUES"] as $vvval):?>
										<option value="<?echo $vvval["ID"]?>"<?if (IntVal($vvval["ID"])==IntVal($currentValue) || !isset($currentValue) && IntVal($vvval["ID"])==IntVal($vval["DEFAULT_VALUE"])) echo " selected"?>><?echo $vvval["COUNTRY_NAME"]." - ".$vvval["CITY_NAME"]?></option>
									<?endforeach;?>
								</select>
								<?
								endif;
								?>
							<?elseif ($vval["TYPE"]=="RADIO"):?>
								<?foreach($vval["VALUES"] as $vvval):?>
									<input type="radio" name="<?=$name?>" value="<?echo $vvval["VALUE"]?>"<?if ($vvval["VALUE"]==$currentValue || !isset($currentValue) && $vvval["VALUE"]==$vval["DEFAULT_VALUE"]) echo " checked"?>><?echo $vvval["NAME"]?><br />
								<?endforeach;?>
							<?endif?>

							<?if (strlen($vval["DESCRIPTION"])>0):?>
								<br /><small><?echo $vval["DESCRIPTION"] ?></small>
							<?endif?>
						</div>	
					</div>	
					<?
				}
			}
		}
		?>
	<br />
	<div align="center">
		<input type="submit" style="border:0px; width:98px; height:22px; background:url(<?=SITE_TEMPLATE_PATH?>/images/btn-order-save.gif) no-repeat;" name="save" value=" ">
		&nbsp;
		<input type="submit" style="border:0px; width:98px; height:22px; background:url(<?=SITE_TEMPLATE_PATH?>/images/btn-order-reset.gif) no-repeat;" name="reset" value=" ">
	</div>
	</form>
<?else:?>
	<?=ShowError($arResult["ERROR_MESSAGE"]);?>
<?endif;?>
