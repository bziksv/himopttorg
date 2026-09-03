<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string

__IncludeLang(dirname(__FILE__).'/lang/'.LANGUAGE_ID.'/'.basename(__FILE__));

$curPage = $GLOBALS['APPLICATION']->GetCurPage($get_index_page=false);
//print '<pre>';
//print_r($arResult);
//print '</pre>';
if ($curPage != SITE_DIR)
{
	if (empty($arResult) || $curPage != $arResult[count($arResult)-1]['LINK'])
		$arResult[] = array('TITLE' =>  htmlspecialcharsback($GLOBALS['APPLICATION']->GetTitle(false, true)), 'LINK' => $curPage);
}

if(empty($arResult))
	return "";
	
$strReturn = '<ul class="crumbs"><li><a href="'.SITE_DIR.'">Главная</a></li>';

//$arResult = array_unique($arResult);
$arResultnew = array();
//print '<pre>';
//print_r($arResult);
//print '</pre>';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	if (in_array($arResult[$index]["LINK"], $arResultnew) && $GLOBALS['view_cat']){
		continue;
	}
	$arResultnew[] = $arResult[$index]["LINK"];
	$strReturn .= '<li';
	
	if (preg_match("/^\/catalog\/[0-9]{1,11}\/[0-9]{1,11}\/$/i", $GLOBALS['APPLICATION']->GetCurDir()) && count($arResult) == ($index+1)){
		$strReturn .= ' class="cl_left"';
	}
	$strReturn .= '>';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	
	$strReturn .= '<a href="'.$arResult[$index]["LINK"].'"';
	if (count($arResult) == ($index+1)){
		$strReturn .= ' class="active"';
	}
	$strReturn .= '>'.$title.'</a>';
	$strReturn .= '</li>';
}

$strReturn .= '</ul>';

return $strReturn;
?>