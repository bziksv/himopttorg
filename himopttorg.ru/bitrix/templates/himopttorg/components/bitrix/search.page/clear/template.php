<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule("catalog");

//	print '<pre>';
//	print_r($arResult);
//	print '</pre>';
if (isset($_GET['BUY'])){
	Add2BasketByProductID($_GET['P_ID'], intval($_GET["QUANTITY"]));
	LocalRedirect($arResult['URL']);
}
?>

	<?if($arParams["SHOW_TAGS_CLOUD"] == "Y")
	{
		$arCloudParams = Array(
			"SEARCH" => $arResult["REQUEST"]["~QUERY"],
			"TAGS" => $arResult["REQUEST"]["~TAGS"],
			"CHECK_DATES" => $arParams["CHECK_DATES"],
			"arrFILTER" => $arParams["arrFILTER"],
			"SORT" => $arParams["TAGS_SORT"],
			"PAGE_ELEMENTS" => $arParams["TAGS_PAGE_ELEMENTS"],
			"PERIOD" => $arParams["TAGS_PERIOD"],
			"URL_SEARCH" => $arParams["TAGS_URL_SEARCH"],
			"TAGS_INHERIT" => $arParams["TAGS_INHERIT"],
			"FONT_MAX" => $arParams["FONT_MAX"],
			"FONT_MIN" => $arParams["FONT_MIN"],
			"COLOR_NEW" => $arParams["COLOR_NEW"],
			"COLOR_OLD" => $arParams["COLOR_OLD"],
			"PERIOD_NEW_TAGS" => $arParams["PERIOD_NEW_TAGS"],
			"SHOW_CHAIN" => "N",
			"COLOR_TYPE" => $arParams["COLOR_TYPE"],
			"WIDTH" => $arParams["WIDTH"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"RESTART" => $arParams["RESTART"],
		);

		if(is_array($arCloudParams["arrFILTER"]))
		{
			foreach($arCloudParams["arrFILTER"] as $strFILTER)
			{
				if($strFILTER=="main")
				{
					$arCloudParams["arrFILTER_main"] = $arParams["arrFILTER_main"];
				}
				elseif($strFILTER=="forum" && IsModuleInstalled("forum"))
				{
					$arCloudParams["arrFILTER_forum"] = $arParams["arrFILTER_forum"];
				}
				elseif(strpos($strFILTER,"iblock_")===0)
				{
					foreach($arParams["arrFILTER_".$strFILTER] as $strIBlock)
						$arCloudParams["arrFILTER_".$strFILTER] = $arParams["arrFILTER_".$strFILTER];
				}
				elseif($strFILTER=="blog")
				{
					$arCloudParams["arrFILTER_blog"] = $arParams["arrFILTER_blog"];
				}
				elseif($strFILTER=="socialnetwork")
				{
					$arCloudParams["arrFILTER_socialnetwork"] = $arParams["arrFILTER_socialnetwork"];
				}
			}
		}
		$APPLICATION->IncludeComponent("bitrix:search.tags.cloud", ".default", $arCloudParams, $component, array("HIDE_ICONS" => "Y"));
	}
	?>
	<p class="add_tit">Р РµР·СѓР»СЊС‚Р°С‚С‹ РїРѕРёСЃРєР° РїРѕ РєР°С‚Р°Р»РѕРіСѓ</p>
	<h1><?=htmlspecialchars ( $_GET ["q"], ENT_QUOTES )?></h1>
	
		

	<?if($arResult["REQUEST"]["QUERY"] === false && $arResult["REQUEST"]["TAGS"] === false):?>
	<?elseif($arResult["ERROR_CODE"]!=0):?>
		<p><?=GetMessage("CT_BSP_ERROR")?></p>
		<?ShowError($arResult["ERROR_TEXT"]);?>
		<p><?=GetMessage("CT_BSP_CORRECT_AND_CONTINUE")?></p>
		<br /><br />
		<p><?=GetMessage("CT_BSP_SINTAX")?><br /><b><?=GetMessage("CT_BSP_LOGIC")?></b></p>
		<table border="0" cellpadding="5">
			<tr>
				<td align="center" valign="top"><?=GetMessage("CT_BSP_OPERATOR")?></td><td valign="top"><?=GetMessage("CT_BSP_SYNONIM")?></td>
				<td><?=GetMessage("CT_BSP_DESCRIPTION")?></td>
			</tr>
			<tr>
				<td align="center" valign="top"><?=GetMessage("CT_BSP_AND")?></td><td valign="top">and, &amp;, +</td>
				<td><?=GetMessage("CT_BSP_AND_ALT")?></td>
			</tr>
			<tr>
				<td align="center" valign="top"><?=GetMessage("CT_BSP_OR")?></td><td valign="top">or, |</td>
				<td><?=GetMessage("CT_BSP_OR_ALT")?></td>
			</tr>
			<tr>
				<td align="center" valign="top"><?=GetMessage("CT_BSP_NOT")?></td><td valign="top">not, ~</td>
				<td><?=GetMessage("CT_BSP_NOT_ALT")?></td>
			</tr>
			<tr>
				<td align="center" valign="top">( )</td>
				<td valign="top">&nbsp;</td>
				<td><?=GetMessage("CT_BSP_BRACKETS_ALT")?></td>
			</tr>
		</table>
	<?elseif(count($arResult["SEARCH"])>0):?>
		<?if($arParams["DISPLAY_TOP_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
		<form class="order_form" action="">
		<table class="order_tbl" id="order_tbl">
		<thead>
			<tr>
				<th class="first">&nbsp;</th>
				<th class="c2">РќР°РёРјРµРЅРѕРІР°РЅРёРµ</th>
				<th class="c3">Р•РґРёРЅРёС†Р°</th>													
				<th class="c4">РЎС‚РѕРёРјРѕСЃС‚СЊ<br />СЃ РќР”РЎ (СЂСѓР±.)</th>
				<th class="c5">Р’ РєРѕСЂР·РёРЅСѓ</th>
				<th class="last">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
		<?foreach($arResult["SEARCH"] as $arItem):?>
		<?
		$arItem['ELEMENT'] = CCatalogProduct::GetByIDEx($arItem["ITEM_ID"]);
		//$arItem['ELEMENT']['PRICE_GET'] = CPrice::GetByID($arItem['ELEMENT']['ID']);
		//print '<pre>';print_r($arItem);print '</pre>';
		?>
			<tr>
				<td class="first">&nbsp;</td>
				<td class="c2"><a href="<?=$arItem["URL_WO_PARAMS"]?>"><?=$arItem["TITLE"]?></a></td>
				<td class="c3"><?=$arItem['ELEMENT']['PROPERTIES']['CML2_BASE_UNIT']['VALUE']?></td>
				<td class="c4"><?=$arItem['ELEMENT']['PRICES']['2']['PRICE']?></td>		
				<td class="c5 w85"><input type="button" value="" class="btns status2" title="РџРѕР»РѕР¶РёС‚СЊ РІ РєРѕСЂР·РёРЅСѓ" onclick="document.location.href='<?=$arResult['URL']?>&BUY&P_ID=<?=$arItem['ELEMENT']['ID']?>&QUANTITY='+$('#P_<?=$arItem['ELEMENT']['ID']?>').val()"/><p class="inp3"><input id="P_<?=$arItem['ELEMENT']['ID']?>" type="text" class="field3" value="1" /></p></td>																							
				<td class="last">&nbsp;</td>
			</tr>
			<?/*<div class="search-item">
				<h4><a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a></h4>
				<div class="search-preview"><?echo $arItem["BODY_FORMATED"]?></div>
				<?if(
					($arParams["SHOW_ITEM_DATE_CHANGE"] != "N")
					|| ($arParams["SHOW_ITEM_PATH"] == "Y" && $arItem["CHAIN_PATH"])
					|| ($arParams["SHOW_ITEM_TAGS"] != "N" && !empty($arItem["TAGS"]))
				):?>
				<div class="search-item-meta">
					<?if($arParams["SHOW_ITEM_TAGS"] != "N" && !empty($arItem["TAGS"])):?>
						<div class="search-item-tags"><label><?echo GetMessage("CT_BSP_ITEM_TAGS")?>: </label><?
						foreach ($arItem["TAGS"] as $tags):
							?><a href="<?=$tags["URL"]?>"><?=$tags["TAG_NAME"]?></a> <?
						endforeach;
						?></div>
					<?endif;?>

					<?if($arParams["SHOW_ITEM_DATE_CHANGE"] != "N"):?>
						<div class="search-item-date"><label><?echo GetMessage("CT_BSP_DATE_CHANGE")?>: </label><span><?echo $arItem["DATE_CHANGE"]?></span></div>
					<?endif;?>
				</div>
				<?endif?>
			</div>*/?>
		<?endforeach;?>
		</tbody>
			</table>										
		</form>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"] != "N") echo $arResult["NAV_STRING"]?>
		<?if($arParams["SHOW_ORDER_BY"] != "N"):?>
			<div class="search-sorting"><label><?echo GetMessage("CT_BSP_ORDER")?>:</label>&nbsp;
			<?if($arResult["REQUEST"]["HOW"]=="d"):?>
				<a href="<?=$arResult["URL"]?>&amp;how=r"><?=GetMessage("CT_BSP_ORDER_BY_RANK")?></a>&nbsp;<b><?=GetMessage("CT_BSP_ORDER_BY_DATE")?></b>
			<?else:?>
				<b><?=GetMessage("CT_BSP_ORDER_BY_RANK")?></b>&nbsp;<a href="<?=$arResult["URL"]?>&amp;how=d"><?=GetMessage("CT_BSP_ORDER_BY_DATE")?></a>
			<?endif;?>
			</div>
		<?endif;?>
	<?else:?>
		<?ShowNote(GetMessage("CT_BSP_NOTHING_TO_FOUND"));?>
	<?endif;?>
			
	