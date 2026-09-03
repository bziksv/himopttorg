<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
$INPUT_ID = trim($arParams["~INPUT_ID"]);
if(strlen($INPUT_ID) <= 0)
	$INPUT_ID = "title-search-input";
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams["~CONTAINER_ID"]);
if(strlen($CONTAINER_ID) <= 0)
	$CONTAINER_ID = "title-search";
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);

if($arParams["SHOW_INPUT"] !== "N"):?>

<!--block_search-->
<div class="block_search">
	<p>Поиск по каталогу</p>
	<form action="<?echo $arResult["FORM_ACTION"]?>">
		<div class="search_wrap">
			<div class="search">
				<input type="text" name="q" value="" autocomplete="off" class="field" id="<?echo $INPUT_ID?>" />
				<input type="submit" name="s" value="" class="btn_search" />										
			</div>
			<i class="search_l"><img class="png24" src="<?=SITE_TEMPLATE_PATH?>/images/field_l.png" width="4px" height="20px" alt="" /></i>
		</div>
	</form>
</div>
<!--/block_search-->
<?endif?>
<script type="text/javascript">
var jsControl = new JCTitleSearch({
	//'WAIT_IMAGE': '/bitrix/themes/.default/images/wait.gif',
	'AJAX_PAGE' : '<?echo POST_FORM_ACTION_URI?>',
	'CONTAINER_ID': '<?echo $CONTAINER_ID?>',
	'INPUT_ID': '<?echo $INPUT_ID?>',
	'MIN_QUERY_LEN': 2
});
</script>
