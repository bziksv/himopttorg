<?php
header("Content-Type: application/json; charset=UTF-8");

function himopt_ajax_json($data)
{
	echo json_encode($data, JSON_UNESCAPED_UNICODE);
	die();
}

if (!check_bitrix_sessid()) {
	himopt_ajax_json(array("ok" => false, "error" => "Сессия устарела, обновите страницу"));
}

if (!CModule::IncludeModule("catalog") || !CModule::IncludeModule("sale") || !CModule::IncludeModule("iblock")) {
	himopt_ajax_json(array("ok" => false, "error" => "Модуль каталога недоступен"));
}

$id = isset($_POST["id"]) ? intval($_POST["id"]) : 0;
$qty = isset($_POST["quantity"]) ? intval($_POST["quantity"]) : 0;
if ($qty < 1) {
	$qty = 1;
}
if ($qty > 99999) {
	$qty = 99999;
}
if ($id < 1) {
	himopt_ajax_json(array("ok" => false, "error" => "Товар не найден"));
}

$product = CCatalogProduct::GetByID($id);
if (!$product) {
	himopt_ajax_json(array("ok" => false, "error" => "Товар не найден"));
}
if (floatval($product["QUANTITY"]) <= 0) {
	himopt_ajax_json(array("ok" => false, "error" => "Товара нет в наличии"));
}

$basketId = Add2BasketByProductID($id, $qty);
if (!$basketId) {
	himopt_ajax_json(array("ok" => false, "error" => "Не удалось добавить товар"));
}

$sum = 0;
$dbBasket = CSaleBasket::GetList(
	array(),
	array(
		"FUSER_ID" => CSaleBasket::GetBasketUserID(),
		"LID" => SITE_ID,
		"ORDER_ID" => "NULL",
		"DELAY" => "N",
		"CAN_BUY" => "Y",
	)
);
while ($item = $dbBasket->Fetch()) {
	$sum += round(floatval($item["PRICE"]) * floatval($item["QUANTITY"]), 2);
}

$name = "";
$el = CIBlockElement::GetByID($id)->GetNext();
if ($el) {
	$name = isset($el["NAME"]) ? $el["NAME"] : "";
}

himopt_ajax_json(array(
	"ok" => true,
	"message" => "Товар добавлен в корзину",
	"name" => $name,
	"sum" => $sum,
	"quantity" => $qty,
));
