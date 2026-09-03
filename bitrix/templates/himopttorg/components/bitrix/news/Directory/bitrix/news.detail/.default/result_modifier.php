<?
$arSelect = Array("ID", "IBLOCK_ID", "NAME", "DETAIL_PAGE_URL","PROPERTY_*");
$arFilter = Array("IBLOCK_ID" => $arResult['PROPERTIES']['ARTICLES']['LINK_IBLOCK_ID'],"ID" => $arResult['PROPERTIES']['ARTICLES']['VALUE'],"ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array("nPageSize"=>50), $arSelect);
while($ob = $res->GetNextElement()){ 
 $arFields = $ob->GetFields();  
$arResult['ARTICLES_ITEM'][] = $arFields;

}
