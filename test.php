<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");

  $orderID = 553;


  $arOrder = CSaleOrder::GetByID($orderID);
  
  //-- РїРѕР»СѓС‡Р°РµРј С‚РµР»РµС„РѕРЅС‹ Рё Р°РґСЂРµСЃ
  $order_props = CSaleOrderPropsValue::GetOrderProps($orderID);
  $arPropsEnd = array();
  
  while ($arProps = $order_props->Fetch())
  {
	    if ($arProps["CODE"] == "LOCATION")
		{
        $arLocs = CSaleLocation::GetByID($arProps["VALUE"]);
        $arProps['VALUE'] = $arLocs["CITY_NAME_ORIG"];
		}
	  $arPropsEnd[$arProps['CODE']]['NAME'] = $arProps['NAME'];
	  $arPropsEnd[$arProps['CODE']]['VALUE'] = $arProps['VALUE'];
  }

 
 CModule::IncludeModule('sale');
$res = CSaleBasket::GetList(array(), array("ORDER_ID" => $orderID)); // ID заказа


$order_list = '';
$order_list .= '<TABLE style="border:1px solid #000;border-collapse:collapse;">';
$order_list .= '<TR><TD style="border:1px solid;padding: 5px;">Наименование</TD><TD style="border:1px solid;padding: 5px;">Стоимость</TD><TD style="border:1px solid;padding: 5px;">Кол-во</TD></TR>';
while ($arItem = $res->Fetch()) {
	$order_list .= '<TR><TD style="border:1px solid;padding: 5px;">'.$arItem['NAME'].'</TD><TD style="border:1px solid;padding: 5px;">'.CurrencyFormat($arItem['PRICE'], "RUB").' </TD><TD style="border:1px solid;padding: 5px;">'.$arItem['QUANTITY'].' шт.</TD></TR>';
}
$order_list .= '</TABLE>';




print $order_list;

  
 $table_order = '<TABLE style="border:1px solid #000;border-collapse:collapse;">
        <TR>
		<TD><strong>Личные данные</strong></TD>
        </TR>
        <TR>
		<TD style="border:1px solid #000;padding:0px;">
            <TABLE style="border-collapse: collapse;width:100%">
                <TR style="border-bottom: 1px solid #000;"><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['FIO']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['FIO']['VALUE'].'</TD></TR>
                <TR style="border-bottom: 1px solid #000;"><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['EMAIL']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['EMAIL']['VALUE'].'</TD></TR>
                <TR><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['PHONE']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['PHONE']['VALUE'].'</TD></TR>
            </TABLE>
         </TD>
        </TR>
		<TR>
		<TD><strong>Данные для доставки</strong></TD>
        </TR>
        <TR>
		<TD style="border:1px solid #000;padding:0px;">
            <TABLE style="border-collapse: collapse;width:100%">
                <TR style="border-bottom: 1px solid #000;"><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['ZIP']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['ZIP']['VALUE'].'</TD></TR>
                <TR style="border-bottom: 1px solid #000;"><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['LOCATION']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['LOCATION']['VALUE'].'</TD></TR>
                <TR><TD style="border-right: 1px solid;padding: 3px 5px;">'.$arPropsEnd['ADDRESS']['NAME'].':</TD><TD style="padding: 3px 5px;">'.$arPropsEnd['ADDRESS']['VALUE'].'</TD></TR>
            </TABLE>
         </TD>
        </TR>
</TABLE>';
  
 
  //$arFields["ORDER_PARAMS"] =  $table_order;
  
  //print $table_order;
?>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>