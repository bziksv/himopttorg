<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
// sale.order.full sets ORDER_ID only when numerator is on; otherwise leave empty after lookup by ID.
$himoptOrderId = "";
if (!empty($arResult["ORDER_ID"])) {
	$himoptOrderId = $arResult["ORDER_ID"];
} elseif (!empty($arResult["ORDER"]["ID"])) {
	$himoptOrderId = $arResult["ORDER"]["ID"];
} elseif (!empty($arResult["ORDER"]["ACCOUNT_NUMBER"])) {
	$himoptOrderId = $arResult["ORDER"]["ACCOUNT_NUMBER"];
} elseif (!empty($_REQUEST["ORDER_ID"])) {
	$himoptOrderId = $_REQUEST["ORDER_ID"];
}
$himoptOrderId = htmlspecialcharsbx((string)$himoptOrderId);
// Банковский перевод (bill): пустой бланк не открываем — счёт шлёт менеджер
$himoptPayFile = strtolower((string)($arResult["PAY_SYSTEM"]["ACTION_FILE"] ?? ""));
$himoptPayName = mb_strtolower((string)($arResult["PAY_SYSTEM"]["NAME"] ?? ""));
$himoptBillManual = (
	strpos($himoptPayFile, "bill") !== false
	|| mb_strpos($himoptPayName, "банковск") !== false
);
?>
<table>
<tr>
	<td valign="top" width="60%">
		<?
		if (!empty($arResult["ORDER"]))
		{
			?>
			<b><?echo GetMessage("STOF_ORDER_CREATED")?></b><br /><br />
			<table class="sale_order_full_table">
				<tr>
					<td>
						<?= str_replace("#ORDER_DATE#", $arResult["ORDER"]["DATE_INSERT_FORMATED"], str_replace("#ORDER_ID#", $himoptOrderId, GetMessage("STOF_ORDER_CREATED_DESCR"))); ?><br /><br />
						<?= str_replace("#LINK#", $arParams["PATH_TO_PERSONAL"], GetMessage("STOF_ORDER_VIEW")) ?>
					</td>
				</tr>
			</table>
			<?
			if (!empty($arResult["PAY_SYSTEM"]))
			{
				?>
				<br /><br />
				<b><?echo GetMessage("STOF_ORDER_PAY_ACTION")?></b><br /><br />

				<table class="sale_order_full_table">
					<tr>
						<td>
							<?echo GetMessage("STOF_ORDER_PAY_ACTION1")?> <?= $arResult["PAY_SYSTEM"]["NAME"] ?>
						</td>
					</tr>
					<tr>
						<td>
							<?
							if ($himoptBillManual)
							{
								echo GetMessage("HIMOPT_ORDER_PAY_MANAGER");
							}
							elseif (strlen($arResult["PAY_SYSTEM"]["ACTION_FILE"]) > 0
								&& $arResult["PAY_SYSTEM"]["NEW_WINDOW"] != "Y"
								&& strlen($arResult["PAY_SYSTEM"]["PATH_TO_ACTION"]) > 0)
							{
								include($arResult["PAY_SYSTEM"]["PATH_TO_ACTION"]);
							}
							?>
						</td>
					</tr>
				</table>
				<?
			}
		}
		else
		{
			?>
			<b><?echo GetMessage("STOF_ERROR_ORDER_CREATE")?></b><br /><br />

			<table class="sale_order_full_table">
				<tr>
					<td>
						<?=str_replace("#ORDER_ID#", $himoptOrderId, GetMessage("STOF_NO_ORDER"))?>
						<?=GetMessage("STOF_CONTACT_ADMIN")?>
					</td>
				</tr>
			</table>
			<?
		}
		?>
	</td>
	<td valign="top" width="5%">&nbsp;</td>
	<td valign="top" width="35%">
		<?= str_replace("#LINK#", $arParams["PATH_TO_PERSONAL"], GetMessage("STOF_ORDER_VIEW")) ?><br /><br />
		<?= str_replace("#LINK#", $arParams["PATH_TO_PERSONAL"], GetMessage("STOF_ANNUL_NOTES")) ?><br /><br />
		<?= str_replace("#ORDER_ID#", $himoptOrderId, GetMessage("STOF_ORDER_ID_NOTES")) ?>
	</td>
</tr>
</table>
