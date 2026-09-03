<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?$APPLICATION->ShowHead();?>
<title><?=$APPLICATION->ShowTitle()?></title>

<meta name="application-name" content="himopttorg.ru">
<meta name="msapplication-tooltip" content="«ХимОптТорг» - надежность, доступность, стабильность">
<meta name="msapplication-TileImage" content="/tileicon.png">
<meta name="msapplication-TileColor" content="#4C9EDE">
<link rel="icon" href="/favicon.ico" type="image/x-icon"/> 
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/form.css" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/ie7.css" /><![endif]-->
<!--[if IE 8]><link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/ie8.css" /><![endif]-->	
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery-1.4.2.js"></script>		
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/form.js"></script>		
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.tablehover.js"></script>
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/table.js"></script>
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/thumbs.js"></script>			
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/FreeSetExtraBoldCTT_400.font.js"></script>
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/script.js"></script>
<script type="text/javascript">	
	//Cufon.replace('h1');
	//Cufon.replace('h2');	
	Cufon.replace('.freeset');	
</script>
<!--[if IE 6]>
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/width.js"></script>			
<script type="text/JavaScript" src="<?=SITE_TEMPLATE_PATH?>/js/jshover.js"></script>			
<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/ie6fix.js"></script>
<script type="text/javascript">
	DD_belatedPNG.fix('.png24,#header,.basket_bg,.mistery_bg,.mistery,.search,.item1,.item2,.item3,.item4,.item5,.item6,.item7,.item8,.item9,.item10,.item11,.item12,.item13,.inp,.btn_r,.btn_l,.photo_bord,.bn3,.btn_enter');
</script>
<![endif]-->
<link rel="stylesheet" href="/bitrix/css/css С€Р°Р±Р»РѕРЅ 1.css">
</head>
<? $APPLICATION->ShowPanel(); ?>
<body>

	<div class="minwidth">	
		<!--wrap-->
		<div class="wrap">
			<div class="top_bg"></div>
			<div class="basket_bg"></div>
			<!--container-->
			<div id="container">				
				<!--header-->
				<div id="header">
					<div class="logo">
						<a href="/"><img class="png24" src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" width="319px" height="145px" alt="" /></a>
					</div>
						<div class="header_contact">							
						<div class="header_tel">
							<p class="freeset"><span>(473)</span>223-18-14</p>
							<p class="freeset">227-70-30</p>
							<p class="freeset">223-06-11</p>
						</div>
						<div class="header_adress">
							<table class="thumbs" style="font-size:18px;">
								<tr>
									<td class="first act"><a href="" show="s1"><span>Воронеж</span></a></td>
									<td><a href="https://l.himopttorg.ru/" show="s2"><span>Липецк</span></a></td>	
								</tr>
							</table>
							<!--s1-->
							<div class="l_article" id="s1">
								<p class="adress">ул.Землячки, д.21<br />офис 103, СКЛАД</p>
							</div>
							<!--s1-->						
							<!--s1-->
							<div class="l_article" id="s2" style="display:none;">
								<p class="adress">Поперечный проезд, владение 3а, кабинет 3<br /> +7(4742) 31-05-05</p>
							</div>
							<!--s1-->	
						</div>
					</div>				
				</div>
				<!--/header-->					
				<!--mainnav-->
				<div class="mainnav">
					<!--nav_block-->
					<div class="nav_block">							
						<ul class="nav">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "top_menu", array(
								"ROOT_MENU_TYPE" => "top",
								"MAX_LEVEL" => "2",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "Y"
								),
								false
							);?>
						</ul>												
					</div>
					<!--/nav_block-->	
					<?
					$APPLICATION->IncludeComponent("bitrix:sale.basket.basket.small", "him", array(
						"PATH_TO_BASKET" => SITE_DIR."personal/cart/",
						"PATH_TO_PERSONAL" => SITE_DIR."personal/"
						),
						false
					);
					?>
				</div>
				<!--/mainnav-->		
				<!--wrapper-->	
				<div  class="wrapper">
					<!--sidebar-->	
					<div class="sidebar">
						<!--in_sidebar-->	
						<div class="in_sidebar">
							<?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	"store", 
	array(
		"NUM_CATEGORIES" => "1",
		"TOP_COUNT" => "5",
		"CHECK_DATES" => "N",
		"SHOW_OTHERS" => "Y",
		"PAGE" => "#SITE_DIR#search/",
		"CATEGORY_0_TITLE" => GetMessage("SEARCH_GOODS"),
		"CATEGORY_0" => array(
			0 => "iblock_catalog",
		),
		"CATEGORY_0_iblock_catalog" => array(
			0 => "all",
		),
		"CATEGORY_OTHERS_TITLE" => GetMessage("SEARCH_OTHER"),
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "search",
		"COMPONENT_TEMPLATE" => "store",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>
							<!--addnav_block-->
							<div class="addnav_block">
								<ul class="addnav">
									<?
									$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"vertical_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "left",
		"MENU_CACHE_TYPE" => "A",
		"MENU_CACHE_TIME" => "36000000",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "2",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"COMPONENT_TEMPLATE" => "vertical_multilevel"
	),
	false
);
									?>
								</ul>
							</div>
							<!--/addnav_block-->
							<?$APPLICATION->IncludeComponent("bitrix:system.auth.form", "auth_panel", array(
								"REGISTER_URL" => SITE_DIR."login/",
								"PROFILE_URL" => SITE_DIR."personal/profile/",
								"SHOW_ERRORS" => "N"
								),
								false,
								Array()
							);?>
						</div>
						<!--/in_sidebar-->	
					</div>
					<!--/sidebar-->	
					<!--content-->
					<div class="content">
						<!--in_content-->
						<div class="in_content">							
							<?if (!preg_match("/^\/catalog\/[0-9]{1,11}\/[0-9]{1,11}\/$/i", $APPLICATION->GetCurDir())){?><!--main_column-->
							<div class="main_column<?if($APPLICATION->GetCurDir()!="/"){echo' w100';}?>">
							<?}?>	
							<?
							if (preg_match("/^\/catalog\/[0-9]{1,11}\/[0-9]{1,11}\/$/i", $APPLICATION->GetCurDir())){
								?>
								
								<?
							}
							?>