<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
//СЃРєСЂРёРїС‚ Рє РєРѕС‚РѕСЂРѕРјСѓ Р±СѓРґРµС‚ РѕР±СЂР°С‰Р°С‚СЊСЃСЏ РїР»Р°С‚РµР¶РЅР°СЏ СЃРёСЃС‚РµРјР° РґР»СЏ РїРµСЂРµРґР°С‡Рё РёРЅС„РѕСЂРјР°С†РёРё Рѕ РїР»Р°С‚РµР¶Рµ
//С„Р°Р№Р» РґРѕР»Р¶РµРЅ СЂР°СЃРїРѕР»Р°РіР°С‚СЊСЃСЏ РІ РїСѓР±Р»РёС‡РЅРѕР№ С‡Р°СЃС‚Рё СЃР°Р№С‚Р° Рё РџР»Р°С‚РµР¶РЅРѕР№ СЃРёСЃС‚РµРјРµ РЅРµРѕР±С…РѕРґРёРјРѕ СЃРѕРѕР±С‰РёС‚СЊ
//Р°РґСЂРµСЃ СЌС‚РѕРіРѕ С„Р°Р№Р»Р°. Р¤Р°Р№Р» РїСЂРёРЅРёРјР°РµС‚ РїР°СЂР°РјРµС‚СЂС‹, РїРµСЂРµРґР°РЅРЅС‹Рµ РјРµС‚РѕРґРѕРј GET Рё С‚РѕР»СЊРєРѕ РІ СЂРµР¶РёРјРµ PAYMENT
define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("sale");
if($mode == "PAYMENT")
{
	if(IntVal($issuer_id)>0)
	{
		$bCorrectPayment = True;

		if (!($arOrder = CSaleOrder::GetByID(IntVal($issuer_id))))
			$bCorrectPayment = False;

		if ($bCorrectPayment)
			CSalePaySystemAction::InitParamArrays($arOrder, $arOrder["ID"]);

		$PASS = CSalePaySystemAction::GetParamValue("PASS");

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
			if (isset($payer) && strlen($payer)>0)
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
				&& IntVal($confirmed) == 1)
			{
				$arFields["PAYED"] = "Y";
				$arFields["DATE_PAYED"] = Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG)));
				$arFields["EMP_PAYED_ID"] = false;
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
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>