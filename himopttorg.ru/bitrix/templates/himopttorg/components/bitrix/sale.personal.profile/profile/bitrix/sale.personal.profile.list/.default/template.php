<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if(strlen($arResult["ERROR_MESSAGE"])>0)
	ShowError($arResult["ERROR_MESSAGE"]);?>
<?if(strlen($arResult["NAV_STRING"]) > 0):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>

<table class="order_tbl" id="order_tbl"> 
		<thead> 
			<tr> 
				<th class="first">&nbsp;</th> 
				<th class="c2"><?=GetMessage("P_ID")?><br /><?=SortingEx("ID")?></th> 
				<th class="c3"><?=GetMessage("P_DATE_UPDATE")?><br /><?=SortingEx("DATE_UPDATE")?></th>													
				<th class="c4"><?=GetMessage("P_NAME")?><br /><?=SortingEx("NAME")?></th> 
				<th class="c4"><?=GetMessage("P_PERSON_TYPE")?><br /><?=SortingEx("PERSON_TYPE_ID")?></th> 
				<th class="c4"><?=GetMessage("SALE_ACTION")?></th> 
				<th class="last">&nbsp;</th> 
			</tr> 
		</thead> 
		<tbody>
			<?foreach($arResult["PROFILES"] as $val):?>
				<tr> 
					<td class="first">&nbsp;</td> 
					<td class="c2"><?=$val["ID"]?></td> 
					<td class="c3"><?=$val["DATE_UPDATE"]?></td> 
					<td class="c4"><?=$val["NAME"]?></td>		
					<td class="c4"><?=$val["PERSON_TYPE"]["NAME"]?></td>		
					<td class="c4"><a title="<?= GetMessage("SALE_DETAIL_DESCR") ?>" href="<?=$val["URL_TO_DETAIL"]?>"><?= GetMessage("SALE_DETAIL") ?></a><br />
						<a title="<?= GetMessage("SALE_DELETE_DESCR") ?>" href="javascript:if(confirm('<?= GetMessage("STPPL_DELETE_CONFIRM") ?>')) window.location='<?=$val["URL_TO_DETELE"]?>'"><?= GetMessage("SALE_DELETE")?></a></td>
					</td>		
					<td class="last">&nbsp;</td> 
				</tr>
			<?endforeach;?>
		</tbody>
</table>
<?if(strlen($arResult["NAV_STRING"]) > 0):?>
	<p><?=$arResult["NAV_STRING"]?></p>
<?endif?>