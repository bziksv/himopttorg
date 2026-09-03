<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
require_once( dirname(__FILE__)."/../prolog.php" );

IncludeModuleLangFile(__FILE__);

// messages
$install_status=CModule::IncludeModuleEx("askaron.pro1c");

// demo expired (3)
if( $install_status==3 )
{
	$APPLICATION->SetTitle(GetMessage("askaron_pro1c_title"));
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
	CAdminMessage::ShowMessage(
		Array(
			"TYPE"=>"ERROR",
			"MESSAGE"=>GetMessage("askaron_pro1c_prolog_status_demo_expired"),
			"DETAILS"=>GetMessage("askaron_pro1c_prolog_buy_html"),
			"HTML"=>true
		)
	);
}
else
{
	$RIGHT = $APPLICATION->GetGroupRight("askaron.pro1c");
	$RIGHT_W = ($RIGHT >= "W");
	$RIGHT_R = ($RIGHT >= "R");
	if ($RIGHT == "D")
	{
		$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
	}

	if ($RIGHT_R)
	{
		@set_time_limit(300);

		$arResult = array(
			"RUN" => false,
			"ERROR" => "",
			"COUNT" => 0,
		);

		if (!\Bitrix\Main\Loader::includeModule("iblock"))
		{
			die("Модуль инфоблоков не установлен");
		}

		if (!\Bitrix\Main\Loader::includeModule("catalog"))
		{
			die("Модуль каталог не установлен");
		}

		if (!\Bitrix\Main\Loader::includeModule("sale"))
		{
			die("Модуль интернет-магазин не установлен");
		}


		$runtime = array();
		$runtime['ELEMENT'] = array(
			'data_type' => 'Bitrix\Iblock\Element',
			'reference' => array(
				'=this.PRODUCT_ID' => 'ref.ID'
			)
		);

		$filter = array();
//		$filter['=BASKET.PRODUCT_ID'] = 100500;

		$parameters = array(
			'select' => array('ID', 'NAME', 'PRODUCT_XML_ID', "PRODUCT_ID", 'ELEMENT_NAME' => 'ELEMENT.NAME',  'ELEMENT_XML_ID' => "ELEMENT.XML_ID" ),
			'filter' => $filter,
			'runtime' => $runtime,
			'group' => array(),
			'order' => array('ID' => 'ASC'),
		);


		$resultDb = \Bitrix\Sale\Internals\BasketTable::getList($parameters);
		while ( $arFields = $resultDb->fetch() )
		{
			if (
					mb_strlen($arFields["ELEMENT_XML_ID"]) > 0
				&&
					$arFields["PRODUCT_XML_ID"] !== $arFields["ELEMENT_XML_ID"]
			)
			{
				$arResult["COUNT"]++;
			}
		}

		if (
			check_bitrix_sessid()
			&&
			$_REQUEST['askaron_pro1c_update'] == "Y"
		)
		{
			$arResult["RUN"] = true;

			// скопировать XML_ID!
			if (  $RIGHT_W )
			{
				$count_updated = 0;

				$resultDb = \Bitrix\Sale\Internals\BasketTable::getList($parameters);
				while ( $arFields = $resultDb->fetch() )
				{
					if (
						mb_strlen($arFields["ELEMENT_XML_ID"]) > 0
						&&
						$arFields["PRODUCT_XML_ID"] !== $arFields["ELEMENT_XML_ID"]
					)
					{
						$result = \Bitrix\Sale\Internals\BasketTable::Update(
								$arFields["ID"],
								array(
										"PRODUCT_XML_ID" => $arFields["ELEMENT_XML_ID"]
								)
						);
						if ($result)
						{
							$count_updated++;
						}
					}
				}

				$path = $APPLICATION->GetCurPageParam(
					"updated=OK&count_updated=".$count_updated,
					array("askaron_pro1c_copy_xml_id", "updated", "count_updated", "askaron_pro1c_update")
				);
				LocalRedirect($path);
			}
			else
			{
				$arResult["ERROR"] = "Недостаточно прав";
			}
		}


		// Title
		$APPLICATION->SetTitle("Исправление XML_ID в корзинах и заказах");
		require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

		// demo (2)
		if ($install_status == 2)
		{
			CAdminMessage::ShowMessage(
				Array(
					"TYPE" => "OK",
					"MESSAGE" => GetMessage("askaron_pro1c_prolog_status_demo"),
					"DETAILS" => GetMessage("askaron_pro1c_prolog_buy_html"),
					"HTML" => true
				)
			);
		}

		?>
		<?=BeginNote();?>
			В случае, если товары хранятся только в инфоблоках, и в элементах поменяли XML_ID, то желательно
			исправить XML_ID товаров в корзинах и заказах на новые.
		<?=EndNote();?>


		<p>Несовпадающих XML_ID: <?=$arResult["COUNT"]?><p>

		<form method="GET" action="">
			<?=bitrix_sessid_post()?>

			<input type="submit" name="askaron_pro1c_update" value="Исправить несовпадающие XML_ID"/>
			<input type="hidden" name="askaron_pro1c_update" value="Y"/>
			<input type="hidden" name="lang" value="<?=LANGUAGE_ID;?>"/>
		</form>

		<?if ($_REQUEST["updated"])
		{
			echo '<br><br>';
			CAdminMessage::ShowMessage(
				Array(
					"TYPE" => "OK",
					"MESSAGE" => htmlspecialcharsbx($_REQUEST["count_updated"])." XML_ID обновлены",
					"DETAILS" => "",
					"HTML" => true
				)
			);
		}
		?>

		<br><br>

		<?if ( $arResult["ERROR"] ):?>
			<?CAdminMessage::ShowMessage(
				Array(
					"TYPE" => "ERROR",
					"MESSAGE" => $arResult["ERROR"],
					"DETAILS" => "",
					"HTML" => true
				)
			);?>
		<?else:?>


		<?endif?>
		<?
	}
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>
