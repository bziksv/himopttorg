<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$APPLICATION->SetPageProperty("keywords", $arResult['SECTION']['NAME'].'/'.$arResult['NAME']);
$APPLICATION->SetPageProperty("description", "Лакокрасочная, химическая, резино- и асбестотехническая, пластмассовая и пр. продукция, строительные материалы для розничных и оптовых покупателей: {$arResult['SECTION']['NAME']}/{$arResult['NAME']}");
if (isset($_GET['BUY'])){
	if ((float)$arResult['CATALOG_QUANTITY'] > 0) {
		Add2BasketByProductID($arResult['ID'], intval($_GET["QUANTITY"]));
	}
	LocalRedirect($arResult['DETAIL_PAGE_URL']);
}
//,strtotime($arResult['DATE_CREATE'])
//print '<!--';
//print '<pre>';print_r($arResult);print '</pre>';
//print '-->';

?>
<!--main_column-->
<div class="main_column">
	<div class="block">
		<?
		$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
			"START_FROM" => "1",
			"PATH" => "",
			"SITE_ID" => "-"
			),
			false,
			Array('HIDE_ICONS' => 'Y')
		);
		?>
		
		<?
		
		if($arResult['PROPERTIES']['NAME_SEO']['VALUE']){
			
			print '<h1 class="title_h1">'.$arResult['PROPERTIES']['NAME_SEO']['VALUE'].'</h1>';
		}else{
			
			$res = CIBlockElement::GetByID($arResult['ID']);
			$ar_res = $res->GetNext();
			$title1 = '<'.$ar_res['TAGS_TITLE'].'>';
			$title2 = '</'.$ar_res['TAGS_TITLE'].'>';
			if(!empty($ar_res['TAGS_TITLE'])){
				print $title1.$arResult['NAME'].$title2;		
			}else{
				print '<h1 class="title_h1">'.$arResult['NAME'].'</h1>';		
			}
		}
		?>
		
	</div>
	<? if($arResult['PROPERTIES']['DETAIL_TEXT_SEO']['VALUE']): ?>
		<div class="block"><?=$arResult['PROPERTIES']['DETAIL_TEXT_SEO']['~VALUE']['TEXT']?></div>
	<? else: ?>
		<div class="block"><?=$arResult['DETAIL_TEXT']?></div>
	<? endif; ?>
</div>
<!--/main_column-->

<?
	$uniqueId = $arResult['ID'].'_'.md5($this->randString().$component->getAction());
	$areaId = $this->GetEditAreaId($uniqueId);
	
	$sayt = isset($arResult["PROPERTIES"]["SAYT_1"]["VALUE"]) ? $arResult["PROPERTIES"]["SAYT_1"]["VALUE"] : "";
	$showSubscribe = ($arResult["CATALOG_QUANTITY"] <= 0 && function_exists("himopt_sayt_keep_on_zero") && himopt_sayt_keep_on_zero($sayt));
	$linkSubscribe = $areaId.'_subscribe';
?>
<!--add_column-->
<div class="add_column">
	<div class="in_add_column">						
		<div class="order_block">									
			<div class="price">										
				<p>Цена указана на <?=date('d.m.Y')?>:</p>
				<p class="price_item"><?=$arResult['CATALOG_PRICE_3']?> р./<?=$arResult['CATALOG_MEASURE_NAME']?></p>
			</div>
			<? if($showSubscribe): ?>
			
				<p style="margin-bottom: 5px;">Товара нет в наличии</p>
				<?
				$APPLICATION->IncludeComponent(
					'bitrix:catalog.product.subscribe',
					'',
					array(
						'PRODUCT_ID' => $arResult['ID'],
						'BUTTON_ID' => $linkSubscribe,
						'BUTTON_CLASS' => 'btn btn-subscribe',
						'DEFAULT_DISPLAY' => true,
						'MESS_BTN_SUBSCRIBE' => "Уведомить о поступлении",
						'TITLE_ALREADY_SUBSCRIBED' => "Уведомим на почту о поступлении товара",
					),
					$component,
					array('HIDE_ICONS' => 'Y')
				);
				?>
			
			<? else: ?>
			<div class="order_sum">
				<div class="qty">
					<p>кол-во</p>
					<p class="inp3"><input type="text" class="field3" maxlength="5" value="1" id="cnt_count"
						onkeyup="$('#itogo').html($(this).val()*<?=$arResult['CATALOG_PRICE_3']?>+'&nbsp;р.');"/></p>
				</div>
				<div class="sum_block">
					<p>сумма</p>
					<p class="sum" id="itogo"><?=$arResult['CATALOG_PRICE_3']?> р.</p>
				</div>
			</div>
			<div class="btn btn_order">
				<div class="btn_r">
					<input type="button" id="orderbu" value="Добавить" onclick="document.location.href='?BUY&QUANTITY='+$('#cnt_count').val()" />
				</div>
				<i class="btn_l"></i>								
			</div>
			<? endif;?>
			
		</div>
		<?if (is_array($arResult['DETAIL_PICTURE'])){?>
		<div class="dood_photo">
			<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" width="174px" alt="" />
		</div>
		<?}?>
	</div>
</div>	
<!--/add_column-->

