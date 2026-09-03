<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//print '<pre>';
//print_r($arResult);
//print '</pre>';
?>
<?
if ($arResult["READY"]=="Y" || $arResult["DELAY"]=="Y" || $arResult["NOTAVAIL"]=="Y"):?>
	<?if ($arResult["READY"]=="Y"):?>
		<div class="basket_block">						
			<div class="basket">
				<p>Ваш заказ на сумму</p>
			<?
			$all_summ = 0;
			foreach ($arResult["ITEMS"] as $v)
			{
				if ($v["DELAY"]=="N" && $v["CAN_BUY"]=="Y")
				{
					$all_summ += round($v["PRICE"]*$v["QUANTITY"],2);
				}
			}
			?>
			<p><b><?=$all_summ?> Р </b></p>
			<?if (strlen($arParams["PATH_TO_BASKET"])>0):?>
				<p class="offer"><a href="<?=$arParams["PATH_TO_BASKET"]?>">сделать заказ</a></p>
			<?endif;?>
			<?if (strlen($arParams["PATH_TO_ORDER"])>0):?>
				<p class="offer"><a href="<?= $arParams["PATH_TO_ORDER"] ?>">сделать заказ</a></p>
			<?endif;?>
			</div>					
		</div>
	<?else:?>
		<div class="basket_block">						
			<div class="basket">
				<p>Ваша корзина пуста, для оформления заказа выберите товар в каталоге</p>
			</div>					
		</div>
	<?endif;?>
<?else:?>
<div class="basket_block">						
	<div class="basket">
		<p>Ваша корзина пуста, для оформления заказа выберите товар в каталоге</p>
	</div>					
</div>
<?endif;?>
