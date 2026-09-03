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
			"WARNING" => "",
			"IBLOCK_CATALOG" => "",
			"IBLOCK_LIST" => array(),
			"IBLOCK_CATALOG_PROP_LIST" => array(),
			"IBLOCK_CATALOG_PROP_ID" => "",
			//"CODE" => "1234",
			"IBLOCK_CATALOG_COUNT" => 0,
			"IBLOCK_CATALOG_DIFF" => 0,
			"IBLOCK_CATALOG_EMPTY" => 0,
			"IBLOCK_CATALOG_PROPERTY_EMPTY" => 0,

			"IBLOCK_CATALOG_UPDATED" => 0,
			"IBLOCK_CATALOG_CHANGED" => 0,


		);

		if (!\Bitrix\Main\Loader::includeModule("iblock"))
		{
			die("Модуль инфоблоков не установлен");
		}

		$res = \CIBlock::GetList( array("ID" => "ASC"), array("CHECK_PERMISSIONS" => "Y") );
		while ($arFields = $res->GetNext())
		{
			$arResult["IBLOCK_LIST"][$arFields["ID"]] = $arFields;
		}

		if (
			check_bitrix_sessid()
			&&
			$_REQUEST['askaron_pro1c_form_run'] == "Y"
		)
		{
			// выбираем ифоблок, если он из нашего списка доступных
			if ( intval($_REQUEST['askaron_pro1c_iblock_id']) > 0 && isset( $arResult["IBLOCK_LIST"][ $_REQUEST['askaron_pro1c_iblock_id'] ] )  )
			{
				$arResult["IBLOCK_CATALOG"] = intval($_REQUEST["askaron_pro1c_iblock_id"]);
			}


			if ( $arResult["IBLOCK_CATALOG"] > 0 )
			{
				$res = \CIBlockProperty::GetList( array("SORT" => "ASC"), array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
					"ACTIVE" => "Y",
					"PROPERTY_TYPE" => "S",
					"MULTIPLE" => "N",

				) );
				while( $arFields = $res->Fetch() )
				{
					//if ($arFields["CODE"] !== "ASKARON_PRO1C_OLD_XML_ID")
					//{
						$arResult["IBLOCK_CATALOG_PROP_LIST"][$arFields["ID"]] = array(
							"ID" => $arFields["ID"],
							"CODE" => $arFields["CODE"],
							"NAME" => $arFields["NAME"],
						);
					//}
				}


				if (
					mb_strlen($_REQUEST["askaron_pro1c_iblock_catalog_prop"] ) > 0
					&&
					isset( $arResult["IBLOCK_CATALOG_PROP_LIST"][ $_REQUEST["askaron_pro1c_iblock_catalog_prop"] ] ) )
				{
					$arResult["IBLOCK_CATALOG_PROP_ID"] = $_REQUEST["askaron_pro1c_iblock_catalog_prop"];
				}
			}

			if (
				check_bitrix_sessid()
				&&
				$_REQUEST['askaron_pro1c_update'] == "Y"
				&&
				$arResult["IBLOCK_CATALOG"] > 0
				&&
				$arResult["IBLOCK_CATALOG_PROP_ID"] > 0
				&&
				$RIGHT_W
			)
			{
				$arFilter = array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
				);

				$arSelect = array(
					"ID",
					"XML_ID",
					"IBLOCK_ID",
					"PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]
				);

				$res = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
				while ($arFields = $res->Fetch())
				{
					if (
						"" . $arFields["XML_ID"] !== "". $arFields["PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ]
							&&
						mb_strlen( $arFields["PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ] ) > 0
					)
					{
						$arUpdateValues = array(
							$arResult["IBLOCK_CATALOG_PROP_ID"] => $arFields["XML_ID"],
						);

						$el = new \CIBlockElement();
						$arUpdate = array(
							"IBLOCK_ID" => $arFields["IBLOCK_ID"],
							"XML_ID" =>  "". $arFields["PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ],
						);
						if ( $el->Update( $arFields["ID"], $arUpdate ) )
						{
							$arResult["IBLOCK_CATALOG_CHANGED"]++;
						}
					}
					$arResult["IBLOCK_CATALOG_UPDATED"]++;
				}

//				if ( $arResult["IBLOCK_CATALOG_CHANGED"] > 0 )
//				{
//					\CIBlock::clearIblockTagCache( $arResult["IBLOCK_CATALOG"] );
//				}
			}
		}


		if ( $arResult["IBLOCK_CATALOG"]  > 0 && $arResult["IBLOCK_CATALOG_PROP_ID"] )
		{
			$arFilter = array(
				"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
			);

			$arSelect = array(
				"ID",
				"XML_ID",
				"IBLOCK_ID",
				"PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]
			);

			$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
			while ($arFields = $res->Fetch())
			{
				$arResult["IBLOCK_CATALOG_COUNT"]++;
				if (mb_strlen($arFields["XML_ID"]) > 0)
				{
					if ("".$arFields[ "PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ] !== $arFields["XML_ID"])
					{
						$arResult["IBLOCK_CATALOG_DIFF"]++;
					}
				}
				else
				{
					$arResult["IBLOCK_CATALOG_EMPTY"]++;
				}

				if ( mb_strlen("".$arFields[ "PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ]) <= 0 )
				{
					$arResult["IBLOCK_CATALOG_PROPERTY_EMPTY"]++;
				}
			}
		}

		// Title
		$APPLICATION->SetTitle("Восстановить XML_ID (внешний код) в элементах из свойства");
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
			Инструмент позволяющий восстановить XML_ID (внешний код) из свойства.
			<br><br>
			Если свойство пустое, то в XML_ID (внешний код) пустое значение не будет записано.
		<?=EndNote();?>
		<?if ( $arResult["WARNING"] ):?>
			<?CAdminMessage::ShowMessage(
				Array(
					"TYPE" => "ERROR",
					"MESSAGE" => $arResult["WARNING"],
					"DETAILS" => "",
					"HTML" => true
				)
			);?>
		<?endif?>

		<?if ( $arResult["IBLOCK_CATALOG_UPDATED"] ):?>
			<?CAdminMessage::ShowMessage(
				Array(
					"TYPE" => "OK",
					"MESSAGE" => htmlspecialcharsbx($arResult["IBLOCK_CATALOG_UPDATED"])." XML_ID сохранены, ".htmlspecialcharsbx($arResult["IBLOCK_CATALOG_CHANGED"])." изменены",
					"DETAILS" => "",
					"HTML" => true
				)
			);?>
		<?endif?>

		<form method="GET" action="">
			<?=bitrix_sessid_post()?>

			Инфоблок, в котором у всех элементов надо восстановить XML_ID из свойства
			<br><br>
			<select required name="askaron_pro1c_iblock_id" onchange="this.form.submit();">
				<option value="">не выбрано</option>
				<? foreach ($arResult["IBLOCK_LIST"] as $arItem):?>
					<option
							value="<?=$arItem["ID"]?>"
						<? if ($arItem["ID"] == $arResult["IBLOCK_CATALOG"]):?>
							selected
						<?endif ?>
					>[<?=$arItem["ID"]?>] <?=$arItem["NAME"]?></option>
				<?endforeach ?>
			</select>
			<br><br>
			Свойство, из которого восстановить
			<br><br>
			<select name="askaron_pro1c_iblock_catalog_prop" onchange="this.form.submit();">
				<option value="">не выбрано</option>
				<? foreach ($arResult["IBLOCK_CATALOG_PROP_LIST"] as $arItem):?>
					<option
						value="<?=$arItem["ID"]?>"
						<? if ($arItem["ID"] == $arResult["IBLOCK_CATALOG_PROP_ID"]):?>
							selected
						<?endif ?>
					>[<?=$arItem["ID"]?>] [<?=htmlspecialcharsbx($arItem["CODE"])?>] <?=htmlspecialcharsbx($arItem["NAME"])?></option>
				<?endforeach ?>
			</select>



			<?if ( $arResult["IBLOCK_CATALOG"] > 0 && $arResult["IBLOCK_CATALOG_PROP_ID"] ):?>
				<br><br>
				<br>Всего элементов: <?=$arResult["IBLOCK_CATALOG_COUNT"]?>
				<br>XML_ID пустой: <?=$arResult["IBLOCK_CATALOG_EMPTY"]?>
				<br>XML_ID не пустой и отличается от Свойства: <?=$arResult["IBLOCK_CATALOG_DIFF"]?>
				<br>Свойство пустое: <?=$arResult["IBLOCK_CATALOG_PROPERTY_EMPTY"]?>
			<?endif?>
<?/*
			<br><br>
			Напишите проверочный код «<?=$arResult["CODE"]?>», чтобы защитить от случайного нажатия.
			<br>Не надо устанавливать XML_ID, когда интеграция уже настроена.
			<br><br>
			<input required type="text" name="askaron_pro1c_word" value="<?=htmlspecialcharsbx( $_REQUEST["askaron_pro1c_word"] )?>"/>
			<br><br>
*/?>


			<?if ( $arResult["IBLOCK_CATALOG"] > 0 && $arResult["IBLOCK_CATALOG_PROP_ID"] ):?>
				<br><br>
				<input type="button" value="Обновить элементы. Значение из свойства записать в XML_ID"
				       onclick='this.form.askaron_pro1c_update.value="Y"; this.form.submit();' />
			<?endif?>
			<input type="hidden" name="askaron_pro1c_update" value="N"/>
			<input type="hidden" name="askaron_pro1c_form_run" value="Y"/>
			<input type="hidden" name="lang" value="<?=LANGUAGE_ID?>"/>
		</form>

		<?
	}
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>
