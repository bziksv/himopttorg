<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?


if (isset($_GET['BUY'])){
	Add2BasketByProductID($_GET['P_ID'], intval($_GET["QUANTITY"]));
	LocalRedirect($arResult['SECTION_PAGE_URL']);
}
	
?>
<br/><br/>
<form class="order_form" action="">
<table class="order_tbl" id="order_tbl">
		<thead>
			<tr>
				<th class="first">&nbsp;</th>
				<th class="c2">РќР°РёРјРµРЅРѕРІР°РЅРёРµ</th>
				<th class="c3">Р•РґРёРЅРёС†Р°</th>													
				<th class="c4">РЎС‚РѕРёРјРѕСЃС‚СЊ<br>СЃ РќР”РЎ (СЂСѓР±.)</th>
				<th class="c5">Р’ РєРѕСЂР·РёРЅСѓ</th>
				<th class="last">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			
			<?
			
		
		
		
	



			$id_product = explode(',',$arResult['PROPERTIES']['ADD_PRODUCT_ID']['VALUE']);

			foreach($id_product as $prod){
				$db_res = CPrice::GetList(array(),array("PRODUCT_ID" => $prod));
				$res = CIBlockElement::GetByID($prod);
				if($ar_res = $res->GetNext()){
					//var_dump($ar_res);
				  
				  ?>
				<tr>
					<td class="first">&nbsp;</td>
					<td class="c2"><a href="<?=$ar_res['DETAIL_PAGE_URL'];?>"><?=$ar_res['NAME'];?></a></td>
					<td class="c3">С€С‚</td>
					<td class="c4"><?if ($ar_res = $db_res->Fetch()){echo CurrencyFormat($ar_res["PRICE"], $ar_res["CURRENCY"]);}?></td>		
					<td class="c5 w85"><input type="button" value="" class="btns status2" title="РџРѕР»РѕР¶РёС‚СЊ РІ РєРѕСЂР·РёРЅСѓ" onclick="document.location.href='?BUY&P_ID=<?=$prod?>&QUANTITY='+$('#P_<?=$prod?>').val()" /><p class="inp3"><input type="text" class="field3" id="P_<?=$prod?>" value="1" /></p></td>																																													
					<td class="last">&nbsp;</td>
				</tr>		
				  <?
				  
				  
				}
			}
			?>
		
		</tbody>
	</table>
	</form>
<br/><br/>	
	<script type="text/javascript">$(function(){
disableAddToCart('catalog_add2cart_link_4839', 'list', 'РЈР¶Рµ РІ РєРѕСЂР·РёРЅРµ');
})</script>

<?
    if ($arResult["PROPERTIES"]["CATALOG"]["VALUE"]>0)
    {
        CModule::IncludeModule('iblock');

        $el = CIblockElement::GetList(
            array(),
            array(
                "ID"=>$arResult["PROPERTIES"]["CATALOG"]["VALUE"]
            ),
            array(
                "IBLOCK_ID",
                "ID",
                "IBLOCK_SECTION_ID",
                "DETAIL_PAGE_URL"
            )
        );
        $arItem = $el->GetNext();
        LocalRedirect($arItem['DETAIL_PAGE_URL'],true,'301 Moved permanently');
    }
?>
<?$APPLICATION->SetPageProperty("keywords",$arResult["PROPERTIES"]["keywords"]["VALUE"]);
$APPLICATION->SetPageProperty("description",$arResult["PROPERTIES"]["description"]["VALUE"]);
$APPLICATION->SetPageProperty("title",$arResult["PROPERTIES"]["title"]["VALUE"]);?>

<div class="news-item news-detail">

	<?//if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<!-- <h1 style="padding:0;"><?//$arResult["NAME"]?></h1> -->
	<?//endif;?>
<?
	//var_dump($arResult);
	?>
		<div class="news-detail"><?echo $arResult["DETAIL_TEXT"];?></div>
 	
		

</div>