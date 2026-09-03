<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//var_dump($arResult);

if (empty($arResult))
	return;
//echo '<pre>'; print_r($arResult); echo '</pre>';
$lastSelectedItem = null;
$lastSelectedIndex = -1;



foreach($arResult as $itemIdex => $arItem)
{
	if (!$arItem["SELECTED"])
		continue;

	if ($lastSelectedItem == null || strlen($arItem["LINK"]) >= strlen($lastSelectedItem["LINK"]))
	{
		$lastSelectedItem = $arItem;
		$lastSelectedIndex = $itemIdex;
	}
}
?>

<?foreach($arResult as $itemIdex => $arItem):?>
<?if ($arItem['DEPTH_LEVEL'] == 1 && count($arItem['PARAMS']) > 0):?>
<li<?if ($arItem["SELECTED"] == '1'){echo ' class="active"';}?>><a href="<?=$arItem["LINK"]?>" class="item<?=$arItem['PARAMS']["UF_CLASS"]?>"><?=$arItem["TEXT"]?></a>
	<i class="nav_l"></i>
</li>
<? endif?>
<?endforeach;?>

<p><strong>Доставка продукции</strong> осуществляется компанией ХИМОПТТОРГ <strong>во все регионы Центральной России</strong>:</p>
<ul class="dostavka">
<li>Белгородская область
<li>Липецкая область
<li>Курская область 
<li>Тамбовская область
<li>Воронежская область
</ul>