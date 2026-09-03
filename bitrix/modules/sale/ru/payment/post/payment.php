<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
<p><strong>РђРґСЂРµСЃ РїРµСЂРµРІРѕРґР°:</strong></p>
<p><?= htmlspecialcharsbx(CSalePaySystemAction::GetParamValue("POST_ADDRESS")) ?></p>
<p><strong>РЎС‡РµС‚ в„– <?= intval($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["ID"]) ?> РѕС‚ <?= htmlspecialcharsbx($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["DATE_UPDATE"]) ?></strong></p>

<p><strong>РџР»Р°С‚РµР»СЊС‰РёРє:</strong> <?= htmlspecialcharsEx(CSalePaySystemAction::GetParamValue("PAYER_NAME")) ?></p>
<p>РЎСѓРјРјР° Рє РѕРїР»Р°С‚Рµ: <strong><?= SaleFormatCurrency($GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["SHOULD_PAY"], $GLOBALS["SALE_INPUT_PARAMS"]["ORDER"]["CURRENCY"]) ?></strong></p>

<p>РЎС‡РµС‚ РґРµР№СЃС‚РІРёС‚РµР»РµРЅ РІ С‚РµС‡РµРЅРёРµ С‚СЂРµС… РґРЅРµР№.</p>
