<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
// Р¤Р°Р№Р» РїСЂРёРЅРёРјР°РµС‚ РїР°СЂР°РјРµС‚СЂС‹, РїРµСЂРµРґР°РЅРЅС‹Рµ РјРµС‚РѕРґРѕРј GET Рё С‚РѕР»СЊРєРѕ РІ СЂРµР¶РёРјРµ PAYMENT
if($mode == "PAYMENT")
{
	if(intval($issuer_id)>0)
	{
		$bCorrectPayment = True;
		if (!($arOrder = CSaleOrder::GetByID(intval($issuer_id))))
			$bCorrectPayment = False;

		if ($bCorrectPayment)
			CSalePaySystemAction::InitParamArrays($arOrder, $arOrder["ID"]);

		$PASS = CSalePaySystemAction::GetParamValue("PASS");

		if($PASS == '')
			$bCorrectPayment = False;
		else
			$strCheck = md5($PASS."PAYMENT".$invoice.$issuer_id.$payment_id.$payer.$currency.$value.$date.$confirmed);

		if ($bCorrectPayment && $CHECKSUM != $strCheck)
			$bCorrectPayment = False;
		
		if($bCorrectPayment)
		{
			$strPS_STATUS_DESCRIPTION = "";
			$strPS_STATUS_DESCRIPTION .= "РЅРѕРјРµСЂ СЃС‡РµС‚Р° - ".$invoice."; ";
			$strPS_STATUS_DESCRIPTION .= "РЅРѕРјРµСЂ РїР»Р°С‚РµР¶Р° - ".$payment_id."; ";
			$strPS_STATUS_DESCRIPTION .= "РґР°С‚Р° РїР»Р°С‚РµР¶Р° - ".$date."";
			$strPS_STATUS_DESCRIPTION .= "РєРѕРґ РїРѕРґС‚РІРµСЂР¶РґРµРЅРёСЏ РїР»Р°С‚РµР¶Р° - ".$confirmed."";

			$strPS_STATUS_MESSAGE = "";
			if (isset($payer) && $payer <> '')
				$strPS_STATUS_MESSAGE .= "e-mail РїРѕРєСѓРїР°С‚РµР»СЏ - ".$payer."; ";

			$arFields = array(
					"PS_STATUS" => "Y",
					"PS_STATUS_CODE" => "-",
					"PS_STATUS_DESCRIPTION" => $strPS_STATUS_DESCRIPTION,
					"PS_STATUS_MESSAGE" => $strPS_STATUS_MESSAGE,
					"PS_SUM" => $value,
					"PS_CURRENCY" => $currency,
					"PS_RESPONSE_DATE" => Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG))),
					"USER_ID" => $arOrder["USER_ID"]
				);

			// You can comment this code if you want PAYED flag not to be set automatically
			if ($arOrder["PRICE"] == $value 
				&& intval($confirmed) == 1)
			{
				CSaleOrder::PayOrder($arOrder["ID"], "Y");
			}

			if(CSaleOrder::Update($arOrder["ID"], $arFields))
				echo "OK";
		
		}
	}
	else 
		echo "РљРѕРґ Р·Р°РєР°Р·Р° РЅРµ Р·Р°РґР°РЅ";
}
else
	echo "Р’РёРґ РѕРїРµСЂР°С†РёРё РЅРµ PAYMENT";
?>
