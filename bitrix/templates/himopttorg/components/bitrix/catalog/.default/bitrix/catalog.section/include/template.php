<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="title_h1">РџРѕС…РѕР¶РёРµ С‚РѕРІР°СЂС‹</div>

<?	
if (isset($_GET['BUY'])){
	Add2BasketByProductID($_GET['P_ID'], intval($_GET["QUANTITY"]));
	LocalRedirect($arResult['SECTION_PAGE_URL']);
}
?>


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
			
		

<?
foreach ($arResult['ITEMS'] as $key => $arElement):

?>
	<tr>
		<td class="first">&nbsp;</td>
		<td class="c2">
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
			
			<?=($arElement['PROPERTIES']['NAME_SEO']['VALUE']) ? $arElement['PROPERTIES']['NAME_SEO']['VALUE'] : $arElement["NAME"];?>
			</a>
		</td>
		<td class="c3"><?=$arElement["PROPERTIES"]['CML2_BASE_UNIT']['VALUE']?></td>
		<td class="c4"><?=$arElement['CATALOG_PRICE_2']?></td>		
		<td class="c5 w85"><input type="button" value="" class="btns status2" title="РџРѕР»РѕР¶РёС‚СЊ РІ РєРѕСЂР·РёРЅСѓ" onclick="document.location.href='?BUY&P_ID=<?=$arElement['ID']?>&QUANTITY='+$('#P_<?=$arElement['ID']?>').val()" /><p class="inp3"><input type="text" class="field3" id="P_<?=$arElement['ID']?>" value="1" /></p></td>																							
		<td class="last">&nbsp;</td>
	</tr>
<?endforeach;?>
		</tbody>
	</table>										
</form>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"];?>
<?endif;?>