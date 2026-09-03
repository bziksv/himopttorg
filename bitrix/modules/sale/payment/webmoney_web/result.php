<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
// РЎРєРѕРїРёСЂСѓР№С‚Рµ СЌС‚РѕС‚ С„Р°Р№Р» РІ РїР°РїРєСѓ /bitrix/php_interface/include/sale_payment/
// Рё РёР·РјРµРЅРёС‚Рµ РІ СЃР»СѓС‡Р°Рµ РЅРµРѕР±С…РѕРґРёРјРѕСЃС‚Рё

define("NO_KEEP_STATISTIC", true);
define("NOT_CHECK_PERMISSIONS", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

if (CModule::IncludeModule("sale"))
{
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$bCorrectPayment = True;

		if (!($arOrder = CSaleOrder::GetByID(IntVal($_POST["LMI_PAYMENT_NO"]))))
			$bCorrectPayment = False;

		if ($bCorrectPayment)
			CSalePaySystemAction::InitParamArrays($arOrder, $arOrder["ID"]);

		$CNST_SECRET_KEY = CSalePaySystemAction::GetParamValue("CNST_SECRET_KEY");
		$CNST_PAYEE_PURSE = CSalePaySystemAction::GetParamValue("SHOP_ACCT");

		$strCheck = md5($_POST["LMI_PAYEE_PURSE"].$_POST["LMI_PAYMENT_AMOUNT"].$_POST["LMI_PAYMENT_NO"].$_POST["LMI_MODE"].$_POST["LMI_SYS_INVS_NO"].$_POST["LMI_SYS_TRANS_NO"].$_POST["LMI_SYS_TRANS_DATE"].$CNST_SECRET_KEY.$_POST["LMI_PAYER_PURSE"].$_POST["LMI_PAYER_WM"]);
		if ($bCorrectPayment && strtoupper($_POST["LMI_HASH"]) != strtoupper($strCheck))
			$bCorrectPayment = False;

		if ($bCorrectPayment)
		{
			$strPS_STATUS_DESCRIPTION = "";
			if ($_POST["LMI_MODE"] != 0)
				$strPS_STATUS_DESCRIPTION .= "С‚РµСЃС‚РѕРІС‹Р№ СЂРµР¶РёРј, СЂРµР°Р»СЊРЅРѕ РґРµРЅСЊРіРё РЅРµ РїРµСЂРµРІРѕРґРёР»РёСЃСЊ; ";
			$strPS_STATUS_DESCRIPTION .= "РєРѕС€РµР»РµРє РїСЂРѕРґР°РІС†Р° - ".$_POST["LMI_PAYEE_PURSE"]."; ";
			$strPS_STATUS_DESCRIPTION .= "РЅРѕРјРµСЂ СЃС‡РµС‚Р° - ".$_POST["LMI_SYS_INVS_NO"]."; ";
			$strPS_STATUS_DESCRIPTION .= "РЅРѕРјРµСЂ РїР»Р°С‚РµР¶Р° - ".$_POST["LMI_SYS_TRANS_NO"]."; ";
			$strPS_STATUS_DESCRIPTION .= "РґР°С‚Р° РїР»Р°С‚РµР¶Р° - ".$_POST["LMI_SYS_TRANS_DATE"]."";

			$strPS_STATUS_MESSAGE = "";
			$strPS_STATUS_MESSAGE .= "РєРѕС€РµР»РµРє РїРѕРєСѓРїР°С‚РµР»СЏ - ".$_POST["LMI_PAYER_PURSE"]."; ";
			$strPS_STATUS_MESSAGE .= "WMId РїРѕРєСѓРїР°С‚РµР»СЏ - ".$_POST["LMI_PAYER_WM"]."; ";
			if (isset($_POST["LMI_PAYMER_NUMBER"]) && strlen($_POST["LMI_PAYMER_NUMBER"])>0)
				$strPS_STATUS_MESSAGE .= "РЅРѕРјРµСЂ Р’Рњ-РєР°СЂС‚С‹ - ".$_POST["LMI_PAYMER_NUMBER"]."; ";
			if (isset($_POST["LMI_PAYMER_EMAIL"]) && strlen($_POST["LMI_PAYMER_EMAIL"])>0)
				$strPS_STATUS_MESSAGE .= "paymer.com e-mail РїРѕРєСѓРїР°С‚РµР»СЏ - ".$_POST["LMI_PAYMER_EMAIL"]."; ";
			if (isset($_POST["LMI_TELEPAT_PHONENUMBER"]) && strlen($_POST["LMI_TELEPAT_PHONENUMBER"])>0)
				$strPS_STATUS_MESSAGE .= "С‚РµР»РµС„РѕРЅ РїРѕРєСѓРїР°С‚РµР»СЏ - ".$_POST["LMI_TELEPAT_PHONENUMBER"]."; ";
			if (isset($_POST["LMI_TELEPAT_ORDERID"]) && strlen($_POST["LMI_TELEPAT_ORDERID"])>0)
				$strPS_STATUS_MESSAGE .= "РїР»Р°С‚РµР¶ РІ РўРµР»РµРїР°С‚Рµ - ".$_POST["LMI_TELEPAT_ORDERID"]."";

			$arFields = array(
					"PS_STATUS" => "Y",
					"PS_STATUS_CODE" => "-",
					"PS_STATUS_DESCRIPTION" => $strPS_STATUS_DESCRIPTION,
					"PS_STATUS_MESSAGE" => $strPS_STATUS_MESSAGE,
					"PS_SUM" => $_POST["LMI_PAYMENT_AMOUNT"],
					"PS_CURRENCY" => $arOrder["CURRENCY"],
					"PS_RESPONSE_DATE" => Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG))),
					"USER_ID" => $arOrder["USER_ID"]
				);

			// You can comment this code if you want PAYED flag not to be set automatically
			if ($arOrder["PRICE"] == $_POST["LMI_PAYMENT_AMOUNT"] 
				&& $CNST_PAYEE_PURSE == $_POST["LMI_PAYMENT_AMOUNT"])
			{
				$arFields["PAYED"] = "Y";
				$arFields["DATE_PAYED"] = Date(CDatabase::DateFormatToPHP(CLang::GetDateFormat("FULL", LANG)));
				$arFields["EMP_PAYED_ID"] = false;
			}

			CSaleOrder::Update($arOrder["ID"], $arFields);
		}
	}
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>