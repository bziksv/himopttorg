<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
    if ($arResult["PROPERTIES"]["CATALOG"]["VALUE"]>0)
    {
        CModule::IncludeModule('iblock');

        $el = CIblockElement::GetList(
            array(),
            array(
                "ID"=>$arResult["PROPERTIES"]["CATALOG"]["VALUE"]
            ),
            array(
                "IBLOCK_ID",
                "ID",
                "IBLOCK_SECTION_ID",
                "DETAIL_PAGE_URL"
            )
        );
        $arItem = $el->GetNext();
        LocalRedirect($arItem['DETAIL_PAGE_URL'],true,'301 Moved permanently');
    }
?>

<?
$APPLICATION->SetPageProperty("keywords",$arResult["PROPERTIES"]["keywords"]["VALUE"]);
$APPLICATION->SetPageProperty("description",$arResult["PROPERTIES"]["description"]["VALUE"]);
$APPLICATION->SetPageProperty("title",$arResult["PROPERTIES"]["title"]["VALUE"]);?>

<div class="news-item news-detail">


		<div class="news-detail"><?echo $arResult["DETAIL_TEXT"];?></div>
 	
		

</div>

<div class="main_column w100" style="margin-bottom: 50px;">

	<div class="title_h1" style="margin:20px 8px 0 8px;"><?=$arResult['PROPERTIES']['ARTICLES']['NAME']?></div>

	<div class="news-list">

		<? foreach($arResult['ARTICLES_ITEM'] as $art):?>
		<div class="news-item" id="bx_3218110189_35900">
			<div class="news-title">
				<a href="<?=$art['DETAIL_PAGE_URL'];?>"><?=$art['NAME'];?></a>
			</div>
		</div>
		<br>
		<?endforeach;?>

	</div>


</div>
