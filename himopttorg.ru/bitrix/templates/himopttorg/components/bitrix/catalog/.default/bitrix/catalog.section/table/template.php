<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
if ($arResult['DESCRIPTION'] != '' && $_SERVER['REQUEST_URI'] == $arResult['SECTION_PAGE_URL']){
	print '<p>'.$arResult['DESCRIPTION'].'</p>';
}
?>

<?
if (count($arResult['ITEMS']) < 1)
	return;
	
if (isset($_GET['BUY'])){
	Add2BasketByProductID($_GET['P_ID'], intval($_GET["QUANTITY"]));
	LocalRedirect($arResult['SECTION_PAGE_URL']);
}
	
?>
<? foreach ($arResult['ITEMS'] as $key => $arElement): ?>
    <!--main_column-->
    <div class="main_column">
        <div class="block">
            <h1><?=$arElement['NAME']?></h1>
        </div>
        <div class="block"><?=$arElement['DETAIL_TEXT']?></div>
    </div>
    <!--/main_column-->
    <!--add_column-->
    <div class="add_column">
        <div class="in_add_column">
            <?if (is_array($arElement['DETAIL_PICTURE'])){?>
                <div class="dood_photo">
                    <img src="<?=$arElement['DETAIL_PICTURE']['SRC']?>" width="174px" alt="" />
                </div>
            <?}?>
        </div>
    </div>
    <!--/add_column-->
    <div style="clear: both"><br /><br /><br /></div>
<?endforeach;?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<?=$arResult["NAV_STRING"];?>
<?endif;?>