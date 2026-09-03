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
			"CODE" => "1234",
			"IBLOCK_CATALOG_COUNT" => 0,
			"IBLOCK_CATALOG_DIFF" => 0,
			"IBLOCK_CATALOG_EMPTY" => 0,
			"IBLOCK_CATALOG_UPDATED" => 0,
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
			if ( intval($_REQUEST['askaron_pro1c_iblock_id']) > 0 )
			{
				$arResult["IBLOCK_CATALOG"] = intval($_REQUEST["askaron_pro1c_iblock_id"]);
			}


			if (
				check_bitrix_sessid()
				&&
				$_REQUEST['askaron_pro1c_update'] == "Y"
				&&
				$arResult["IBLOCK_CATALOG"] > 0
				&&
				$RIGHT_W
			)
			{
				if ( $_REQUEST['askaron_pro1c_word'] == $arResult["CODE"] )
				{
					if ($arResult["IBLOCK_CATALOG"]  > 0)
					{
						$arFilter = array(
							"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
						);

						$arSelect = array(
							"ID",
							"XML_ID",
							"IBLOCK_ID"
						);

						$res = \CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
						while ($arFields = $res->Fetch())
						{
							if ("" . $arFields["ID"] !== $arFields["XML_ID"])
							{
								$el = new \CIBlockElement();
								$arUpdate = array(
									"XML_ID" =>  $arFields["ID"],
								);
								if ( $el->Update( $arFields["ID"], $arUpdate ) )
								{
									$arResult["IBLOCK_CATALOG_UPDATED"]++;
								}
							}
						}
					}
				}
				else
				{
					$arResult["WARNING"] = "Укажите правильный проверочный код ";
				}
			}
		}


		if ($arResult["IBLOCK_CATALOG"]  > 0)
		{
			$arFilter = array(
				"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
			);

			$arSelect = array(
				"ID",
				"XML_ID",
				"IBLOCK_ID"
			);

			$res = CIBlockElement::GetList(array(), $arFilter, false, false, $arSelect);
			while ($arFields = $res->Fetch())
			{
				$arResult["IBLOCK_CATALOG_COUNT"]++;
				if (mb_strlen($arFields["XML_ID"]) > 0)
				{
					if ("" . $arFields["ID"] !== $arFields["XML_ID"])
					{
						$arResult["IBLOCK_CATALOG_DIFF"]++;
					}
				}
				else
				{
					$arResult["IBLOCK_CATALOG_EMPTY"]++;
				}
			}
		}

		// Title
		$APPLICATION->SetTitle("Заполнение XML_ID (внешний код) в товарах по умолчанию");
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
			Когда интеграция ещё не настроена, перед началом работ надо проверить XML_ID у товаров.
			XML_ID не должны быть пустые и не должны повторяться.
			<br><br>
			Скрипт заполняет XML_ID товаров из их ID. После исправления XML_ID у элементов надо перейти на страницу
			<a href="askaron_pro1c_basket_check.php?lang=<?=LANGUAGE_ID?>">Исправление XML_ID в корзинах и заказах</a>
			<br><br>
			<strong>ВАЖНО!!!</strong> Перед запуском сделайте бекап XML_ID в свойство на странице
			<a href="askaron_pro1c_save_element_xml_id.php?lang=<?=LANGUAGE_ID?>">Сохранить XML_ID (внешний код) из элеметов в свойство</a>

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
					"MESSAGE" => htmlspecialcharsbx($arResult["IBLOCK_CATALOG_UPDATED"])." XML_ID обновлены",
					"DETAILS" => "",
					"HTML" => true
				)
			);?>
		<?endif?>

		<form method="GET" action="">
			<?=bitrix_sessid_post()?>

			Инфоблок, в котором у всех элементов надо заменить XML_ID на ID
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

			<?if ( $arResult["IBLOCK_CATALOG"] > 0 ):?>
				<br>Всего элементов: <?=$arResult["IBLOCK_CATALOG_COUNT"]?>
				<br>XML_ID пустой: <?=$arResult["IBLOCK_CATALOG_EMPTY"]?>
				<br>XML_ID отличается от ID: <?=$arResult["IBLOCK_CATALOG_DIFF"]?>
			<?endif?>

			<br><br>
			Напишите проверочный код «<?=$arResult["CODE"]?>», чтобы защитить от случайного нажатия.
			<br>Не надо устанавливать XML_ID, когда интеграция уже настроена.
			<br><br>
			<input required type="text" name="askaron_pro1c_word" value="<?=htmlspecialcharsbx( $_REQUEST["askaron_pro1c_word"] )?>"/>
			<br><br>

			<input type="button" value="Обновить элементы. В XML_ID записать ID"
			       onclick='this.form.askaron_pro1c_update.value="Y"; this.form.submit();' />
			<input type="hidden" name="askaron_pro1c_update" value="N"/>
			<input type="hidden" name="askaron_pro1c_form_run" value="Y"/>
			<input type="hidden" name="lang" value="<?=LANGUAGE_ID?>"/>
		</form>

		<?
	}
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>
