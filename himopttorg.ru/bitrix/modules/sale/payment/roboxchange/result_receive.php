<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
/*
Р”Р°РЅРЅС‹Р№ СЃРєСЂРёРїС‚ РјРѕР¶РЅРѕ РёСЃРїРѕР»СЊР·РѕРІР°С‚СЊ РґРІР°Р¶РґС‹:
1. РєР°Рє СЃРєСЂРёРїС‚ РЅР° РєРѕС‚РѕСЂС‹Р№ Р±СѓРґРµС‚ РѕР±СЂР°С‰Р°С‚СЊСЃСЏ roboxchange РІ СЃР»СѓС‡Р°Рµ СѓСЃРїРµС€РЅРѕР№ РѕРїР»Р°С‚С‹ (СЃash Register queries the Result_URL)
2. РєР°Рє СЃРєСЂРёРїС‚ РЅР° РєРѕС‚РѕСЂС‹Р№ Р±СѓРґРµС‚ РІРѕР·РІСЂР°С‰Р°С‚СЊСЃСЏ РєР»РёРµРЅС‚ РІ СЃР»СѓС‡Р°Рµ СѓСЃРїРµС€РЅРѕР№ РѕРїР»Р°С‚С‹ ( The customer is redirected to Success_URL only if the payment was successful and the sum of e-currency transferred to Merchant equals to the amount)
*/

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("sale");

	if(IntVal($inv_id)>0)
	{
		$bCorrectPayment = True;

		if (!($arOrder = CSaleOrder::GetByID(IntVal($inv_id))))
			$bCorrectPayment = False;

		if ($bCorrectPayment)
			CSalePaySystemAction::InitParamArrays($arOrder, $arOrder["ID"]);

		$mrh_pass2 =  CSalePaySystemAction::GetParamValue("ShopPassword2"); // РїР°СЂРѕР»СЊ2

		$strCheck = md5($out_summ.":".$inv_id.":".$mrh_pass2);
		if ($bCorrectPayment && strtoupper($CHECKSUM) != strtoupper($strCheck))
			$bCorrectPayment = False;
		
		if($bCorrectPayment)
		{
			$arFields = array(
					"PS_STATUS" => "Y",
					"PS_STATUS_CODE" => "-",
					"PS_STATUS_DESCRIPTION" => $strPS_STATUS_DESCRIPTION,
					"PS_STATUS_MESSAGE" => $strPS_STATUS_MESSAGE,
					"PS_SUM" => $out_summ,
					"PS_CURRENCY" => "",
					"PS_RESPONSE_DATE" => Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG))),
					"USER_ID" => $arOrder["USER_ID"]
				);

			// You can comment this code if you want PAYED flag not to be set automatically
			if ($arOrder["PRICE"] == $out_summ)
			{
				$arFields["PAYED"] = "Y";
				$arFields["DATE_PAYED"] = Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG)));
				$arFields["EMP_PAYED_ID"] = false;
			}

			if(CSaleOrder::Update($arOrder["ID"], $arFields))
				echo "OK";
		
		}
	}
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>