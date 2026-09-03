<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
///print '<pre>';print_r($arResult);print'</pre>';
?>
<?
echo ShowError($arResult["ERROR_MESSAGE"]);
?>
 
<table class="order_tbl" id="order_tbl">
<thead>
	<tr>
		<th class="first">&nbsp;</th>
		<th class="c2">Наименование</th>
		<th class="c3">Единица</th>
		<th class="c4">Кол-во</th>
		<th class="c5">Стоимость<br />с НДС (руб.)</th>
		<th class="c6">Удалить</th>
		<th class="last">&nbsp;</th>
	</tr>
</thead>
<tbody>
	<?
	$i=0;
	foreach($arResult["ITEMS"]["AnDelCanBuy"] as $arBasketItems)
	{
		
		$arBasketItems["PRODUCT_ARRAY"] = CCatalogProduct::GetByIDEx($arBasketItems["PRODUCT_ID"]);
		?>
		<tr>
			<td class="first">&nbsp;</td>
			<td class="c2"><a href="<?=$arBasketItems["DETAIL_PAGE_URL"] ?>"><?=$arBasketItems["NAME"] ?></a></td>
			<td class="c3"><?=$arBasketItems["PRODUCT_ARRAY"]['PROPERTIES']['CML2_BASE_UNIT']['VALUE']?></td>
			<td class="c4"><p class="inp3 cnt"><input type="text" class="field3" name="QUANTITY_<?=$arBasketItems["ID"] ?>" value="<?=$arBasketItems["QUANTITY"]?>" /></p></td>
			<td class="c5"><?=$arBasketItems["PRICE"]?></td>
			<td class="c6"><input type="checkbox" name="DELETE_<?=$arBasketItems["ID"] ?>" id="DELETE_<?=$i?>" value="Y" /></td>
			<td class="last">&nbsp;</td>
		</tr>
		<?
		$i++;
	}
	?>
	
	</tbody>
</table>

<p class="count">
<input type="submit" value="Пересчитать" name="BasketRefresh">
</p>
<p class="result">Общая сумма заказа:<span><?=$arResult["allSum"]?> р.</span></p>
<div class="btn btn_order2">
	<div class="btn_r">
		<input type="submit" value="Оформить заказ" name="BasketOrder"/>	
	</div>
	<i class="btn_l"></i>								
</div>

<?