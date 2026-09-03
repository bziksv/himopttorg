<?
if (!defined ( "B_PROLOG_INCLUDED" ) || B_PROLOG_INCLUDED !== true) {
    die();
}

/*

global $APPLICATION;

if (!function_exists ( "GetTreeRecursive" )) //Include from main.map component
{

    $aMenuLinksExt = $APPLICATION->IncludeComponent ( "bitrix:store.menu.sections",
                                                      "",
                                                      array (
                                                          "IBLOCK_ID"      => "6",
                                                          "DEPTH_LEVEL"    => "1",
                                                          "CACHE_TYPE"     => "A",
                                                          "CACHE_TIME"     => "3600"
                                                      ),
                                                      false
    );
    $aMenuLinks = array_merge ( $aMenuLinks,
                                $aMenuLinksExt
    );
	$aMenuLinks[3][3]['UF_CLASS'] = 5;
	//$aMenuLinks[3]["UF_CLASS"];
	
}

*/



global $APPLICATION;
$aMenuLinksExt = array();

if(CModule::IncludeModule('iblock'))
{
   $arFilter = array(
      "TYPE" => "catalog",
      "SITE_ID" => SITE_ID,
   );

   $dbIBlock = CIBlock::GetList(array('SORT' => 'ASC', 'ID' => 'ASC'), $arFilter);
   $dbIBlock = new CIBlockResult($dbIBlock);

   if ($arIBlock = $dbIBlock->GetNext())
   {
      if(defined("BX_COMP_MANAGED_CACHE"))
         $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_".$arIBlock["ID"]);

      if($arIBlock["ACTIVE"] == "Y")
      {
         $aMenuLinksExt = $APPLICATION->IncludeComponent("bitrix:menu.sections", "", array(
            "IS_SEF" => "Y",
            "SEF_BASE_URL" => "",
            "SECTION_PAGE_URL" => $arIBlock['SECTION_PAGE_URL'],
            "DETAIL_PAGE_URL" => $arIBlock['DETAIL_PAGE_URL'],
            "IBLOCK_TYPE" => $arIBlock['IBLOCK_TYPE_ID'],
            "IBLOCK_ID" => $arIBlock['ID'],
            "DEPTH_LEVEL" => "2",
            "CACHE_TYPE" => "N",
         ), false, Array('HIDE_ICONS' => 'Y'));
      }
   }

   if(defined("BX_COMP_MANAGED_CACHE"))
      $GLOBALS["CACHE_MANAGER"]->RegisterTag("iblock_id_new");
  
 foreach($aMenuLinksExt as $k => $a){ 
	$arFilterSectProp = Array('IBLOCK_ID' => $arIBlock['ID'],'CODE' => str_replace(array("catalog","/"),"",$a[1]), 'GLOBAL_ACTIVE'=>'Y');
    $db_listSectProp = CIBlockSection::GetList(Array(), $arFilterSectProp, false, Array("UF_CLASS"));
    if($uf_valueSectProp = $db_listSectProp->GetNext()){
		$aMenuLinksExt[$k][3]['UF_CLASS'] = $uf_valueSectProp['UF_CLASS'];
	}
 }
}

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);


?>