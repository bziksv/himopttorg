<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<h1>Мои заказы</h1>
<?if(strlen($arResult["NAV_STRING"]) > 0):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>
<table class="specif">
	<tr>
		<th><?=GetMessage("SPOL_T_ID")?><br /><?=SortingEx("ID")?></th>
		<th><?=GetMessage("SPOL_T_PRICE")?><br /><?=SortingEx("PRICE")?></th>
		<th><?=GetMessage("SPOL_T_STATUS")?><br /><?=SortingEx("STATUS_ID")?></th>
		<th><?=GetMessage("SPOL_T_PAYED")?><br /><?=SortingEx("PAYED")?></th>
		<th><?=GetMessage("SPOL_T_CANCELED")?><br /><?=SortingEx("CANCELED")?></th>
		<th>Способ оплаты<br /></th>
		<th><?=GetMessage("SPOL_T_ACTION")?></th>
	</tr>
	<?foreach($arResult["ORDERS"] as $val):?>
		<tr>
			<td><b>#<?=$val["ORDER"]["ID"]?></b> <?=GetMessage("SPOL_T_FROM")?> <?=$val["ORDER"]["DATE_INSERT_FORMAT"]?></td>
			<td><?=$val["ORDER"]["PRICE"]?>СЂ.</td>
			<td><?=$arResult["INFO"]["STATUS"][$val["ORDER"]["STATUS_ID"]]["NAME"]?><br /><?=$val["ORDER"]["DATE_STATUS"]?></td>
			<td><?=(($val["ORDER"]["PAYED"]=="Y") ? GetMessage("SPOL_T_YES") : GetMessage("SPOL_T_NO"))?></td>
			<td><?=(($val["ORDER"]["CANCELED"]=="Y") ? GetMessage("SPOL_T_YES") : GetMessage("SPOL_T_NO"))?></td>
			<td>
				<?=$arResult["INFO"]["PAY_SYSTEM"][$val["ORDER"]["PAY_SYSTEM_ID"]]["NAME"]?>
			</td>
			<td style="font-size:11px;"><a title="<?=GetMessage("SPOL_T_DETAIL_DESCR")?>" href="<?=$val["ORDER"]["URL_TO_DETAIL"]?>"><?=GetMessage("SPOL_T_DETAIL")?></a><br />
				<?/*<a title="<?=GetMessage("SPOL_T_COPY_ORDER_DESCR")?>" href="<?=$val["ORDER"]["URL_TO_COPY"]?>"><?=GetMessage("SPOL_T_COPY_ORDER")?></a><br />*/?>
				<?if($val["ORDER"]["CAN_CANCEL"] == "Y"):?>
					<a title="<?=GetMessage("SPOL_T_DELETE_DESCR")?>" href="<?=$val["ORDER"]["URL_TO_CANCEL"]?>"><?=GetMessage("SPOL_T_DELETE")?></a>
				<?endif;?>
			</td>
		</tr>
	<?endforeach;?>
</table>
<?if(strlen($arResult["NAV_STRING"]) > 0):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>