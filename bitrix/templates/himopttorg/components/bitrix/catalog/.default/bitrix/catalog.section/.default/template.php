<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>



<?


if (count($arResult['ITEMS']) >= 1)
{


	
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
				<th class="c2">Наименование</th>
				<th class="c3">Единица</th>													
				<th class="c4">Стоимость с НДС (руб.)</th>
				<th class="c5">В корзину</th>
				<th class="last">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			
		

<?
foreach ($arResult['ITEMS'] as $key => $arElement):

	$uniqueId = $arElement['ID'].'_'.md5($this->randString().$component->getAction());
	$areaId = $this->GetEditAreaId($uniqueId);
	
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
	
	$showSubscribe = ($arElement["CATALOG_QUANTITY"] <= 0 && $arElement["PROPERTIES"]["SAYT_1"]["VALUE"] === "Yes");
	$linkSubscribe = $areaId.'_subscribe';
	?>

	<tr data-id="<?=$arElement["ID"]?>">
		<td class="first">&nbsp;</td>
		<td class="c2">
			<a href="<?=$arElement["DETAIL_PAGE_URL"]?>">
			
			<?=($arElement['PROPERTIES']['NAME_SEO']['VALUE']) ? $arElement['PROPERTIES']['NAME_SEO']['VALUE'] : $arElement["NAME"];?>
			</a>
		</td>
		<td class="c3"><?=$arElement['CATALOG_MEASURE_NAME']?></td>
		<td class="c4"><?=$arElement['CATALOG_PRICE_3']?></td>		
		<td class="c5 w85">
			<? if($showSubscribe): ?>
			
				<?
				$APPLICATION->IncludeComponent(
					'bitrix:catalog.product.subscribe',
					'',
					array(
						'PRODUCT_ID' => $arElement['ID'],
						'BUTTON_ID' => $linkSubscribe,
						'BUTTON_CLASS' => 'btn btn-subscribe',
						'DEFAULT_DISPLAY' => true,
						'MESS_BTN_SUBSCRIBE' => "Уведомить о поступлении",
						'TITLE_ALREADY_SUBSCRIBED' => "Уведомим на почту о поступлении товара",
					),
					$component,
					array('HIDE_ICONS' => 'Y')
				);
				?>
			
			<? else: ?>
				<input type="button" value="" class="btns status2" title="Положить в корзину" onclick="document.location.href='?BUY&P_ID=<?=$arElement['ID']?>&QUANTITY='+$('#P_<?=$arElement['ID']?>').val()" /><p class="inp3"><input type="text" class="field3" id="P_<?=$arElement['ID']?>" value="1" /></p>
			<? endif; ?>
		</td>																							
		<td class="last">&nbsp;</td>
	</tr>
<?endforeach;?>
		</tbody>
	</table>										
</form>

<?

}

if ($arResult['DESCRIPTION'] != '' && $_SERVER['REQUEST_URI'] == $arResult['SECTION_PAGE_URL']){
	print '<p>'.$arResult['DESCRIPTION'].'</p>';
}
?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"];?>
<?endif;?>