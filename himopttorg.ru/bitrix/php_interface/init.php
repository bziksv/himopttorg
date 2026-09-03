<?



AddEventHandler("sale", "OnOrderNewSendEmail", "bxModifySaleMails");



function bxModifySaleMails($orderID, &$eventName, &$arFields)
{

	$arOrder = CSaleOrder::GetByID($orderID);
  
	$arPropsEnd = array();
	
	if($arFields['PROFILE_ID']){
		
		$db_sales = CSaleOrderUserPropsValue::GetList([], ["USER_PROPS_ID" => $arFields['PROFILE_ID']], false, false, array("*"));
		while ($ar_sales = $db_sales->Fetch())
		{
			$arPropsEnd[$ar_sales['PROP_CODE']]['NAME'] = $ar_sales['PROP_NAME'];
			$arPropsEnd[$ar_sales['PROP_CODE']]['VALUE'] = $ar_sales['VALUE'];
		}	
	}
	else{
		
		$db_profil = CSaleOrderUserProps::GetList(["DATE_UPDATE" => "DESC"], ["USER_ID" => $arOrder['USER_ID']], false, ["nTopCount" => 1]);
		if($ar_profil = $db_profil->Fetch())
		{
		    $db_sales = CSaleOrderUserPropsValue::GetList([], ["USER_PROPS_ID" => $ar_profil['ID']], false, false, array("*"));
			while ($ar_sales = $db_sales->Fetch())
			{
				$arPropsEnd[$ar_sales['PROP_CODE']]['NAME'] = $ar_sales['PROP_NAME'];
				$arPropsEnd[$ar_sales['PROP_CODE']]['VALUE'] = $ar_sales['VALUE'];
			}
		}		
	}


	ob_start();
	?>
	<TABLE style="border:1px solid #000;border-collapse:collapse;">
			<TR>
			<TD><strong>Р”Р°РЅРЅС‹Рµ РїРѕР»СЊР·РѕРІР°С‚РµР»СЏ</strong></TD>
			</TR>
			<TR>
			<TD style="border:1px solid #000;padding:0px;">
				<TABLE style="border-collapse: collapse;width:100%">
					<? foreach($arPropsEnd as $data): ?>
					<TR style="border-bottom: 1px solid #000;"><TD style="border-right: 1px solid;padding: 3px 5px;"><?=$data['NAME']?>:</TD><TD style="padding: 3px 5px;"><?=$data['VALUE']?></TD></TR>
					<? endforeach; ?>
				</TABLE>
			 </TD>
			</TR>
	</TABLE>
	<?
	$table_order = ob_get_contents();
	ob_end_clean();


CModule::IncludeModule('sale');
$res = CSaleBasket::GetList(array(), array("ORDER_ID" => $orderID)); // ID Р·Р°РєР°Р·Р°


$order_list = '';
$order_list .= '<TABLE style="border:1px solid #000;border-collapse:collapse;">';
$order_list .= '<TR><TD style="border:1px solid;padding: 5px;">РќР°РёРјРµРЅРѕРІР°РЅРёРµ</TD><TD style="border:1px solid;padding: 5px;">РЎС‚РѕРёРјРѕСЃС‚СЊ</TD><TD style="border:1px solid;padding: 5px;">РљРѕР»-РІРѕ</TD></TR>';
while ($arItem = $res->Fetch()) {
	$order_list .= '<TR><TD style="border:1px solid;padding: 5px;">'.$arItem['NAME'].'</TD><TD style="border:1px solid;padding: 5px;">'.CurrencyFormat($arItem['PRICE'], "RUB").' </TD><TD style="border:1px solid;padding: 5px;">'.$arItem['QUANTITY'].' С€С‚.</TD></TR>';
}
$order_list .= '</TABLE>';


  
 
  $arFields["ORDER_LIST2"] = $order_list;
  $arFields["ORDER_PARAMS"] = $table_order;
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && $_REQUEST["g-recaptcha-response"]){
	
		if($g_recaptcha_response = $_POST['g-recaptcha-response']){
			$response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LeLwLsaAAAAAB2YtPNSbWlbezBlgxtEcq8M8_9v&response=".$g_recaptcha_response."&remoteip=".$_SERVER["REMOTE_ADDR"]),true);
			if (($response["success"] && $response["score"] <= 0.7)){
				die('wrong captcha');
			}
		}else
			die('wrong captcha');
}

function catalogProductActive()
{	
	$IBLOCK_ID = 6;

	$res = CIBlockElement::GetList([], ["IBLOCK_ID" => $IBLOCK_ID, "<=QUANTITY" => 0, "!PROPERTY_SAYT_1" => "Yes"], false, false, ["ID", "NAME"]);
	while ($arFields = $res->GetNext())
	{
		(new CIBlockElement)->Update($arFields["ID"], ["ACTIVE" => "N"]);
	}

	$res = CIBlockElement::GetList([], ["IBLOCK_ID" => $IBLOCK_ID, ">QUANTITY" => 0], false, false, ["ID", "NAME"]);
	while ($arFields = $res->GetNext())
	{
		(new CIBlockElement)->Update($arFields["ID"], ["ACTIVE" => "Y"]);
	}
		
	return "catalogProductActive();";
}

AddEventHandler("main", "OnBuildGlobalMenu", "himopttorgSverkaMenu");
function himopttorgSverkaMenu(&$aGlobalMenu, &$aModuleMenu)
{
	$aModuleMenu[] = [
		"parent_menu" => "global_menu_store",
		"section" => "himopttorg_sverka",
		"sort" => 55,
		"text" => "Сверка 1С и сайта",
		"title" => "Сравнить живой каталог с /upload/1c_catalog_copy_askaron_pro1c",
		"url" => "himopttorg_sverka_1c.php?lang=".LANGUAGE_ID,
		"icon" => "sale_menu_icon",
		"items_id" => "menu_himopttorg_sverka",
	];
}

?>
