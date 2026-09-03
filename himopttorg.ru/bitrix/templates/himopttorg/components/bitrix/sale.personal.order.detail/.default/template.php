<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?CModule::IncludeModule("catalog");?>
<?if(strlen($arResult["ERROR_MESSAGE"])<=0):?>
<h1><?=GetMessage("SPOD_ORDER_NO")?>&nbsp;<?=$arResult["ID"]?>&nbsp;<?=GetMessage("SPOD_FROM")?> <?=$arResult["DATE_INSERT"] ?></h1>

<div class="order-full-summary">
	<table class="specif">
		<tr>
			<td style="width:30%;">
				<?echo GetMessage("SPOD_ORDER_STATUS")?>
				<br /><?=GetMessage("P_ORDER_PRICE")?>
				<br /><?= GetMessage("P_ORDER_CANCELED") ?>
			</td>
			<td>
				<?=$arResult["STATUS"]["NAME"]?><?=GetMessage("SPOD_ORDER_FROM")?><?=$arResult["DATE_STATUS"]?>)
				<br /><?
				echo "<b>".$arResult["PRICE_FORMATED"]."</b>";
				if (DoubleVal($arResult["SUM_PAID"]) > 0)
					echo "(".GetMessage("SPOD_ALREADY_PAID")."&nbsp;<b>".$arResult["SUM_PAID_FORMATED"]."</b>)";
				?><br /><?echo (($arResult["CANCELED"] == "Y") ? GetMessage("SALE_YES") : GetMessage("SALE_NO"));
				if ($arOrder["CANCELED"] == "Y")
				{
					echo GetMessage("SPOD_ORDER_FROM").$arResult["DATE_CANCELED"].")";
					if (strlen($arResult["REASON_CANCELED"]) > 0)
						echo "<br />".$arResult["REASON_CANCELED"];
				}
				elseif ($arResult["CAN_CANCEL"]=="Y")
				{
					?>&nbsp;<a href="<?=$arResult["URL_TO_CANCEL"]?>"><?=GetMessage("SALE_CANCEL_ORDER")?></a><?
				}?>
			</td>
		</tr>
	</table>


	<?if (IntVal($arResult["USER_ID"])>0):?>
	<br />
	<h3><?echo GetMessage("SPOD_ACCOUNT_DATA")?></h3>
	<table class="specif">
		<tr>
			<td style="width:30%;">
				<?if(strlen($arResult["USER_NAME"]) > 0):?><?= GetMessage("SPOD_ACCOUNT") ?><br /><?endif;?>
				<?= GetMessage("SPOD_LOGIN") ?>
				<br /><?=GetMessage("SPOD_EMAIL")?>
			</td>
			<td>
				<?if(strlen($arResult["USER_NAME"]) > 0):?><?=$arResult["USER_NAME"]?><br /><?endif;?>
				<?=$arResult["USER"]["LOGIN"]?>
				<br /><a href="mailto:<?=$arResult["USER"]["EMAIL"]?>"><?=$arResult["USER"]["EMAIL"]?></a>
			</td>
		</tr>
	</table>
	<?endif;?>
	
	
	<br />
	<h3>1<?=GetMessage("P_ORDER_USER")?></h3>
	<table class="specif">
		<?if(!empty($arResult["ORDER_PROPS"]))
			{
				foreach($arResult["ORDER_PROPS"] as $val)
				{
					if ($val["SHOW_GROUP_NAME"] == "Y")
					{
						?>
						<tr>
							<th colspan="2"><?=$val["GROUP_NAME"];?></td>
						</tr>
						<?
					}
					?>
					<tr>
						<td style="width:30%;"><?echo $val["NAME"] ?>:</td>
						<td><?
							if ($val["TYPE"] == "CHECKBOX")
							{
								if ($val["VALUE"] == "Y")
									echo GetMessage("SALE_YES");
								else
									echo GetMessage("SALE_NO");
							}
							else
								echo $val["VALUE"];
							?>
						</td>
					</tr>
					<?
				}
			}
			if (strlen($arResult["USER_DESCRIPTION"])>0)
			{
				?>
				<tr>
					<td style="width:30%;"><?=GetMessage("P_ORDER_USER_COMMENT")?>:</td>
					<td><?=$arResult["USER_DESCRIPTION"]?></td>
				</tr>
				<?
			}?>
	</table>
	
	<br />
	<h3><?=GetMessage("P_ORDER_PAYMENT")?></h3>
	<table class="specif">
		<tr>
			<td style="width:30%;">
				<?=GetMessage("P_ORDER_PAY_SYSTEM")?>
				<?/*?><br /><?echo GetMessage("P_ORDER_PAYED") ?>
				<br /><?=GetMessage("P_ORDER_DELIVERY")?><?*/?>
			</td>
			<td>
				<?
					if (IntVal($arResult["PAY_SYSTEM_ID"]) > 0)
						echo $arResult["PAY_SYSTEM"]["NAME"];
					else
						echo GetMessage("SPOD_NONE");
					?>
				<?/*?><br /><?
					echo (($arResult["PAYED"] == "Y") ? GetMessage("SALE_YES") : GetMessage("SALE_NO"));
					if ($arResult["PAYED"] == "Y")
						echo GetMessage("SPOD_ORDER_FROM").$arResult["DATE_PAYED"].")";
					if ($arResult["CAN_REPAY"]=="Y")
					{
						if ($arResult["PAY_SYSTEM"]["PSA_NEW_WINDOW"] == "Y")
						{
							?>
							<a href="<?=$arResult["PAY_SYSTEM"]["PSA_ACTION_FILE"]?>" target="_blank"><?=GetMessage("SALE_REPEAT_PAY")?></a>
							<?
						}
						else
						{
							$ORDER_ID = $ID;
							include($arResult["PAY_SYSTEM"]["PSA_ACTION_FILE"]);
						}
					}?>
				<br /><?
					if (strpos($arResult["DELIVERY_ID"], ":") !== false || IntVal($arResult["DELIVERY_ID"]) > 0)
					{
						echo $arResult["DELIVERY"]["NAME"];
					}
					else
					{
						echo GetMessage("SPOD_NONE");
					}
					*/?>
			</td>
		</tr>
	</table>

	<br />
	<h3>РЎРѕРґРµСЂР¶Р°РЅРёРµ Р·Р°РєР°Р·Р°</h3>
	<br />
	<form class="order_form" action="#" style="margin:0;">
		<table class="order_tbl" id="order_tbl">
			<thead>
				<tr>
					<th class="first">&nbsp;</th>
					<th class="c2">РќР°РёРјРµРЅРѕРІР°РЅРёРµ</th>
					<th class="c3">Р•РґРёРЅРёС†Р°</th>
					<th class="c4">РљРѕР»-РІРѕ</th>
					<th class="c5">РЎС‚РѕРёРјРѕСЃС‚СЊ<br />СЃ РќР”РЎ (СЂСѓР±.)</th>
					<th class="last">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?
				foreach($arResult["BASKET"] as $val)
				{	
				
						$val["PRODUCT_ARRAY"] = CCatalogProduct::GetByIDEx($val["PRODUCT_ID"]);
					?>
					<tr>
						<td class="first">&nbsp;</td>
						<td class="c2"><a href="<?=$val["DETAIL_PAGE_URL"]?>"><?=$val["NAME"]?></a></td>
						<td class="c3"><?=$val["PRODUCT_ARRAY"]['PROPERTIES']['CML2_BASE_UNIT']['VALUE']?></td>
						<td class="c4"><?=$val["QUANTITY"]?></td>
						<td class="c5"><?=$val["PRICE"]?></td>
						<td class="last">&nbsp;</td>
					</tr>
					<?
				}
				?>
				
			</tbody>
		</table>
		<p class="result">РћР±С‰Р°СЏ СЃСѓРјРјР° Р·Р°РєР°Р·Р°:<span><?=$arResult["PRICE"]?> СЂ.</span></p>
	</form>
</div>
<?else:?>
	<?=ShowError($arResult["ERROR_MESSAGE"]);?>
<?endif;?>
