<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if (empty($arResult))
	return;
	
$i=0;
?>
<ul class="footer_nav">
	<?foreach($arResult as $itemIdex => $arItem):?>
	<?if(!strpos($arItem["LINK"],'article') AND !strpos($arItem["LINK"],'spravochnik-khimopttorg')){?>
	<noindex><li><a rel='nofollow' href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a><? $i++; if ($i != count($arResult)) echo'|'; ?></li></noindex>
	<?}else{?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a><? $i++; if ($i != count($arResult)) echo'|'; ?></li>
	<?}?>
	<?endforeach;?>
</ul>