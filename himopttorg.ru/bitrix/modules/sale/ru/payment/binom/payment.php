<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?><?
$ORDER_ID = intval($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["ID"]);
?>
<FORM ACTION="https://binom.dzetta.ru" METHOD="GET" target=_blank>
	<p>Р’С‹ С…РѕС‚РёС‚Рµ РѕРїР»Р°С‚РёС‚СЊ С‡РµСЂРµР· РїР»Р°С‚РµР¶РЅСѓСЋ СЃРёСЃС‚РµРјСѓ <strong>"Р‘РёРЅРѕРј"</strong></p>
	<p><a href="http://ehouseholding.ru/docs/binom_direct.htm">РџСЂР°РІРёР»Р° РѕРїР»Р°С‚С‹ РїРѕ РЎРёСЃС‚РµРјРµ Р‘РёРЅРѕРј РІ С„РѕСЂРјР°С‚Рµ direct</a></p>
	<p>CС‡РµС‚ в„– <?= htmlspecialcharsEx($ORDER_ID." РѕС‚ ".CSalePaySystemAction::GetParamValue("DATE_INSERT")) ?></p>
	<p>РЎСѓРјРјР° Рє РѕРїР»Р°С‚Рµ РїРѕ СЃС‡РµС‚Сѓ: <b><?echo SaleFormatCurrency(CSalePaySystemAction::GetParamValue("SHOULD_PAY"), CSalePaySystemAction::GetParamValue("CURRENCY")) ?></b></p>
	<INPUT class="btn btn-primary" TYPE="button" VALUE="РћРїР»Р°С‚РёС‚СЊ" onclick="javascript:window.open('https://binom.dzetta.ru/?action=directOrder&amp;sellerId=<?=CSalePaySystemAction::GetParamValue("SELLER_ID")?>&amp;code=<?=$ORDER_ID?>&amp;date=<?=CSalePaySystemAction::GetParamValue("DATE_INSERT")?>&amp;validUpto=<?=CSalePaySystemAction::GetParamValue("ORDER_LIFE_TIME")?>&amp;sum=<?=CSalePaySystemAction::GetParamValue("SHOULD_PAY")*100?>&amp;shopClientName=<?=CSalePaySystemAction::GetParamValue("SHOP_CLIENT_NAME")?>&amp;email=<?=CSalePaySystemAction::GetParamValue("EMAIL")?>&amp;comment=&amp;n1=<?=$ORDER_ID?>&amp;s1=<?=CSalePaySystemAction::GetParamValue("SHOULD_PAY")*100?>','','status=yes,toolbar=yes,menubar=yes,location=yes,scrollbars=yes,resizable=yes');return false;">
</form>