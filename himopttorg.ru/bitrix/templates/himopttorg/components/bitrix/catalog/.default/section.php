<? if (!defined ( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
} 
?>

<div class="block pl15">
    <?
    $GLOBALS['view_cat'] = true;
    $APPLICATION->IncludeComponent ( "bitrix:breadcrumb",
                                     ".default",
                                     array (
                                         "START_FROM" => "1",
                                         "PATH"       => "",
                                         "SITE_ID"    => "-"
                                     ),
                                     false,
                                     Array ( 'HIDE_ICONS' => 'Y' )
    );
    ?>

        <?
        if ($_SERVER["REQUEST_URI"] === "/catalog/221/") {
            echo '';
        } elseif ($_SERVER["REQUEST_URI"] === "/catalog/186/") {
            echo 'Р“СЂСѓРЅС‚С‹ (РіСЂСѓРЅС‚ Р“Р¤-021)';
        } elseif ($_SERVER["REQUEST_URI"] === "/catalog/201/") {
            echo '';
        } elseif ($_SERVER["REQUEST_URI"] === "/catalog/200/") {
            echo '';
        } elseif ($_SERVER["REQUEST_URI"] === "/catalog/319/") {
            echo '';
        } else {
            ?>
            <?
			 
				
			?>
		
			<?
			
			$arrUrl = explode('/',$_SERVER['REQUEST_URI']);
            $arFilter = Array('CODE' => $arrUrl[2], 'GLOBAL_ACTIVE'=>'Y');
            $db_list = CIBlockSection::GetList(Array(), $arFilter, true);
            while($ar_result = $db_list->GetNext())
            {
				$title1 = '<'.$ar_result['TAGS_TITLE'].'>';
				$title2 = '</'.$ar_result['TAGS_TITLE'].'>';
			if(!empty($ar_result['TAGS_TITLE'])){
				print $title1.$ar_result['NAME'].$title2;
			}else{
				print '<h1 class="title_h1">'.$ar_result['NAME'].'</h1>';
			}
                
				
                
            }
			
			?>
			

			<? } ?>

		
    <?

	/*
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list",
	"",
	Array(
		"IBLOCK_TYPE" => "catalog",
		"IBLOCK_ID" => "6",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_URL" => "#SECTION_CODE#",
		"COUNT_ELEMENTS" => "Y",
		"TOP_DEPTH" => "2",
		"SECTION_FIELDS" => array(),
		"SECTION_USER_FIELDS" => array(),
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	),
false
);

	*/
	
	

    $APPLICATION->IncludeComponent ( "bitrix:catalog.section.list",
                                     "",
                                     Array (
										 "COUNT_ELEMENTS" => "Y",
                                         "IBLOCK_TYPE"   => $arParams["IBLOCK_TYPE"],
                                         "IBLOCK_ID"     => $arParams["IBLOCK_ID"],
                                         "SECTION_ID"    => $arResult["VARIABLES"]["SECTION_ID"],
                                         "SECTION_CODE"    => $arResult["VARIABLES"]["SECTION_CODE"],
                                         "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
                                         "CACHE_TYPE"    => $arParams["CACHE_TYPE"],
                                         "CACHE_TIME"    => $arParams["CACHE_TIME"],
                                         "CACHE_GROUPS"  => $arParams["CACHE_GROUPS"],
                                         "SECTION_URL"   => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                                         "TOP_DEPTH"     => 1,
                                     ),
                                     $component
    );
	
	
    $tpl = '';
    if ($arResult["VARIABLES"]["SECTION_ID"] == '374' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2280' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3097' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3098' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3099' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2286' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2281' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3094' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3095' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '3096' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2283' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2285' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2282' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2284' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '2279' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '375' ||
        $arResult["VARIABLES"]["SECTION_ID"] == '376') {
        $tpl = 'table';
    }
	
	/* $GLOBALS['arrFilterCatalog'] = [
		">=CATALOG_QUANTITY" => "0",
		"=PROPERTY_SAYT_1" => "Yes"
	]; */
	
    $sectionID = $APPLICATION->IncludeComponent ( "bitrix:catalog.section",
                                     $tpl,
                                     Array (
										 "COMPATIBLE_MODE" => "Y",
                                         "IBLOCK_TYPE"                     => $arParams["IBLOCK_TYPE"],
                                         "IBLOCK_ID"                       => $arParams["IBLOCK_ID"],
                                         "ELEMENT_SORT_FIELD"              => $arParams["ELEMENT_SORT_FIELD"],
                                         "ELEMENT_SORT_ORDER"              => $arParams["ELEMENT_SORT_ORDER"],
                                         "PROPERTY_CODE"                   => $arParams["LIST_PROPERTY_CODE"],
                                         "META_KEYWORDS"                   => $arParams["LIST_META_KEYWORDS"],
                                         "META_DESCRIPTION"                => $arParams["LIST_META_DESCRIPTION"],
                                         "BROWSER_TITLE"                   => $arParams["LIST_BROWSER_TITLE"],
                                         "INCLUDE_SUBSECTIONS"             => $arParams["INCLUDE_SUBSECTIONS"],
                                         "BASKET_URL"                      => $arParams["BASKET_URL"],
                                         "ACTION_VARIABLE"                 => $arParams["ACTION_VARIABLE"],
                                         "PRODUCT_ID_VARIABLE"             => $arParams["PRODUCT_ID_VARIABLE"],
                                         "SECTION_ID_VARIABLE"             => $arParams["SECTION_ID_VARIABLE"],
										 "FILTER_NAME"                     => "arrFilterCatalog",
										 "HIDE_NOT_AVAILABLE" => "N",
                                         "DISPLAY_PANEL"                   => $arParams["DISPLAY_PANEL"],
                                         "CACHE_TYPE"                      => $arParams["CACHE_TYPE"],
                                         "CACHE_TIME"                      => $arParams["CACHE_TIME"],
                                         "CACHE_FILTER"                    => $arParams["CACHE_FILTER"],
                                         "CACHE_GROUPS"                    => $arParams["CACHE_GROUPS"],
                                         "SET_TITLE"                       => $arParams["SET_TITLE"],
                                         "SET_STATUS_404"                  => $arParams["SET_STATUS_404"],
                                         "DISPLAY_COMPARE"                 => $arParams["USE_COMPARE"],
                                         "PAGE_ELEMENT_COUNT"              => $arParams["PAGE_ELEMENT_COUNT"],
                                         "LINE_ELEMENT_COUNT"              => $arParams["LINE_ELEMENT_COUNT"],
                                         "PRICE_CODE"                      => $arParams["PRICE_CODE"],
                                         "USE_PRICE_COUNT"                 => $arParams["USE_PRICE_COUNT"],
                                         "SHOW_PRICE_COUNT"                => $arParams["SHOW_PRICE_COUNT"],

                                         "PRICE_VAT_INCLUDE"               => $arParams["PRICE_VAT_INCLUDE"],

                                         "DISPLAY_TOP_PAGER"               => $arParams["DISPLAY_TOP_PAGER"],
                                         "DISPLAY_BOTTOM_PAGER"            => $arParams["DISPLAY_BOTTOM_PAGER"],
                                         "PAGER_TITLE"                     => $arParams["PAGER_TITLE"],
                                         "PAGER_SHOW_ALWAYS"               => $arParams["PAGER_SHOW_ALWAYS"],
                                         "PAGER_TEMPLATE"                  => $arParams["PAGER_TEMPLATE"],
                                         "PAGER_DESC_NUMBERING"            => $arParams["PAGER_DESC_NUMBERING"],
                                         "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
                                         "PAGER_SHOW_ALL"                  => $arParams["PAGER_SHOW_ALL"],

                                         "SECTION_ID"                      => $arResult["VARIABLES"]["SECTION_ID"],
                                         "SECTION_CODE"                    => $arResult["VARIABLES"]["SECTION_CODE"],
                                         "SECTION_URL"                     => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
                                         "DETAIL_URL"                      => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["element"],

                                         "COMPARE_URL"                     => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["compare"],
                                         "COMPARE_NAME"                    => $arParams["COMPARE_NAME"],
                                         "ADD_SECTIONS_CHAIN"              => "Y"
                                     ),
                                     $component
    );
	
    ?>
</div>


<div class="block pl15">

<?

  $arFilter = Array('IBLOCK_ID' => 6, 'ID' => $sectionID);
  $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, false, ['IBLOCK_ID', 'UF_*']);
  if($ar_result = $db_list->GetNext())
  {
    
	if($ar_result['UF_INCLUDE_PRODUCTS']){
		
		$GLOBALS['arrFilterIncludeProducts'] = array(
			"ID" => $ar_result['UF_INCLUDE_PRODUCTS']
		);
		
		$APPLICATION->IncludeComponent(
			"bitrix:catalog.section",
			"include",
			Array(
				"ACTION_VARIABLE" => "action",
				"ADD_PICT_PROP" => "-",
				"ADD_PROPERTIES_TO_BASKET" => "Y",
				"ADD_SECTIONS_CHAIN" => "N",
				"ADD_TO_BASKET_ACTION" => "ADD",
				"AJAX_MODE" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"BACKGROUND_IMAGE" => "-",
				"BASKET_URL" => "/personal/basket.php",
				"BROWSER_TITLE" => "-",
				"CACHE_FILTER" => "N",
				"CACHE_GROUPS" => "Y",
				"CACHE_TIME" => "36000000",
				"CACHE_TYPE" => "A",
				"COMPATIBLE_MODE" => "Y",
				"CONVERT_CURRENCY" => "N",
				"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
				"DETAIL_URL" => "",
				"DISABLE_INIT_JS_IN_COMPONENT" => "N",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_COMPARE" => "N",
				"DISPLAY_TOP_PAGER" => "N",
				"ELEMENT_SORT_FIELD" => "sort",
				"ELEMENT_SORT_FIELD2" => "id",
				"ELEMENT_SORT_ORDER" => "asc",
				"ELEMENT_SORT_ORDER2" => "desc",
				"ENLARGE_PRODUCT" => "STRICT",
				"FILTER_NAME" => "arrFilterIncludeProducts",
				"HIDE_NOT_AVAILABLE" => "N",
				"HIDE_NOT_AVAILABLE_OFFERS" => "N",
				"IBLOCK_ID" => $ar_result['IBLOCK_ID'],
				"IBLOCK_TYPE" => "catalog",
				"INCLUDE_SUBSECTIONS" => "Y",
				"LABEL_PROP" => array(),
				"LAZY_LOAD" => "N",
				"LINE_ELEMENT_COUNT" => "3",
				"LOAD_ON_SCROLL" => "N",
				"MESSAGE_404" => "",
				"MESS_BTN_ADD_TO_BASKET" => "Р’ РєРѕСЂР·РёРЅСѓ",
				"MESS_BTN_BUY" => "РљСѓРїРёС‚СЊ",
				"MESS_BTN_DETAIL" => "РџРѕРґСЂРѕР±РЅРµРµ",
				"MESS_BTN_SUBSCRIBE" => "РџРѕРґРїРёСЃР°С‚СЊСЃСЏ",
				"MESS_NOT_AVAILABLE" => "РќРµС‚ РІ РЅР°Р»РёС‡РёРё",
				"META_DESCRIPTION" => "-",
				"META_KEYWORDS" => "-",
				"OFFERS_LIMIT" => "5",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => ".default",
				"PAGER_TITLE" => "РўРѕРІР°СЂС‹",
				"PAGE_ELEMENT_COUNT" => "18",
				"PARTIAL_PRODUCT_PROPERTIES" => "N",
				"PRICE_CODE" => $arParams["PRICE_CODE"],
				"PRICE_VAT_INCLUDE" => "Y",
				"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
				"PRODUCT_ID_VARIABLE" => "id",
				"PRODUCT_PROPERTIES" => array(),
				"PRODUCT_PROPS_VARIABLE" => "prop",
				"PRODUCT_QUANTITY_VARIABLE" => "quantity",
				"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
				"PRODUCT_SUBSCRIPTION" => "Y",
				"PROPERTY_CODE" => array("",""),
				"PROPERTY_CODE_MOBILE" => array(),
				"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
				"RCM_TYPE" => "personal",
				"SECTION_CODE" => "",
				"SECTION_ID" => "",
				"SECTION_ID_VARIABLE" => "SECTION_ID",
				"SECTION_URL" => "",
				"SECTION_USER_FIELDS" => array("",""),
				"SEF_MODE" => "N",
				"SET_BROWSER_TITLE" => "Y",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "Y",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "Y",
				"SHOW_404" => "N",
				"SHOW_ALL_WO_SECTION" => "N",
				"SHOW_CLOSE_POPUP" => "N",
				"SHOW_DISCOUNT_PERCENT" => "N",
				"SHOW_FROM_SECTION" => "N",
				"SHOW_MAX_QUANTITY" => "N",
				"SHOW_OLD_PRICE" => "N",
				"SHOW_PRICE_COUNT" => "1",
				"SHOW_SLIDER" => "Y",
				"SLIDER_INTERVAL" => "3000",
				"SLIDER_PROGRESS" => "N",
				"TEMPLATE_THEME" => "blue",
				"USE_ENHANCED_ECOMMERCE" => "N",
				"USE_MAIN_ELEMENT_SECTION" => "N",
				"USE_PRICE_COUNT" => "N",
				"USE_PRODUCT_QUANTITY" => "N"
			),
			$component
		);
		
	}
  }
?>
</div>