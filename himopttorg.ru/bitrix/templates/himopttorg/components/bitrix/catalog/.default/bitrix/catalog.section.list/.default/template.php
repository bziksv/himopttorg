<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (count($arResult["SECTIONS"]) > 0):?>
	<ul class="addnav2">										
		<!-- <li><a href="#" class="active">РњР°СЃР»Р° С„СЂРµРѕРЅРѕРІС‹Рµ</a><span>7</span></li> -->														
	<?
	//var_dump($arResult);
	$NUM_COLS = 3;
	$CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
	
	foreach($arResult["SECTIONS"] as $arSection):
	
		$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT"));
		$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CATALOG_SECTION_DELETE_CONFIRM')));	
	
		$bHasPicture = is_array($arSection['PICTURE_PREVIEW']);
		$bHasChildren = is_array($arSection['CHILDREN']) && count($arSection['CHILDREN']) > 0;
	global $USER;
/*if ($USER->IsAdmin()) {	
	print '<pre>';
	print_r($arSection);
	print '</pre>';
}*/
	if (count($arResult["SECTIONS"]) > 1){?>
	<li><a href="<?=$arSection["SECTION_PAGE_URL"]?>"><?=$arSection["NAME"]?></a><span><?=$arSection["ELEMENT_CNT"]?></span></li>
	<?}
	if (isset($GLOBALS['view_cat']) && $bHasChildren){
		foreach($arSection["CHILDREN"] as $arSection2){
			?><li><a href="<?=$arSection2["SECTION_PAGE_URL"]?>"><?=$arSection2["NAME"]?></a><span><?=$arSection2["ELEMENT_CNT"]?></span></li><?
		}
	}
	?>
	<?endforeach;?>
<?endif;?>
</ul>