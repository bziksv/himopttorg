<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if ($arResult["READY"]=="Y" || $arResult["DELAY"]=="Y" || $arResult["NOTAVAIL"]=="Y"):?>
	<?if ($arResult["READY"]=="Y"):?>
		<?
		$all_summ = 0;
		foreach ($arResult["ITEMS"] as $v)
		{
			if ($v["DELAY"]=="N" && $v["CAN_BUY"]=="Y")
			{
				$all_summ += round($v["PRICE"]*$v["QUANTITY"],2);
			}
		}
		$basketUrl = "";
		if (strlen($arParams["PATH_TO_BASKET"])>0)
			$basketUrl = $arParams["PATH_TO_BASKET"];
		elseif (strlen($arParams["PATH_TO_ORDER"])>0)
			$basketUrl = $arParams["PATH_TO_ORDER"];
		?>
		<?if ($basketUrl):?>
		<a class="basket_block" href="<?=htmlspecialcharsbx($basketUrl)?>">
			<span class="basket">
				<span class="basket-line">Ваш заказ на сумму</span>
				<span class="basket-sum"><b><?=$all_summ?> Р</b></span>
				<span class="offer">сделать заказ</span>
			</span>
		</a>
		<?else:?>
		<div class="basket_block">
			<div class="basket">
				<p>Ваш заказ на сумму</p>
				<p><b><?=$all_summ?> Р</b></p>
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
<?else:?>
<div class="basket_block">
	<div class="basket">
		<p>Ваша корзина пуста, для оформления заказа выберите товар в каталоге</p>
	</div>
</div>
<?endif;?>
