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
			"IBLOCK_CATALOG" => "",
			"IBLOCK_CATALOG_ACTIVE_CHECK" => false,
			"IBLOCK_CATALOG_COUNT" => 0,
			"IBLOCK_CATALOG_CHECKED_BY_XML_ID_COUNT" => 0,
			"IBLOCK_CATALOG_PROP_LIST" => array(),
			"IBLOCK_CATALOG_PROP_ID" => "",
			"IBLOCK_CATALOG2" => "",
			"IBLOCK_CATALOG2_PROP_LIST" => array(),
			"IBLOCK_CATALOG2_PROP_ID" => "",
			"IBLOCK_LIST" => array(),


			"ITEMS_CATALOG" => array(),
			"ITEMS_CATALOG2" => array(),
			"ITEMS_CATALOG2_NOT_EQUAL_XML_ID" => array(),
			"ITEMS_CATALOG2_NOT_EQUAL" => array(),
			"ITEMS_COMPARE" => array(),
			"HIDE_EQUAL_XML_ID",
			"COPY_XML_ID" => false,
			"FIND_BY" => "",
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
			$_REQUEST['askaron_pro1c_update'] == "Y"
		)
		{
			if ( isset( $_REQUEST["askaron_pro1c_hide_equal_xml_id"] ) && $_REQUEST["askaron_pro1c_hide_equal_xml_id"] == "Y" )
			{
				$arResult["HIDE_EQUAL_XML_ID"] = true;
			}

			if ( isset( $_REQUEST["askaron_pro1c_catalog_active_check"] ) && $_REQUEST["askaron_pro1c_catalog_active_check"] == "Y" )
			{
				$arResult["IBLOCK_CATALOG_ACTIVE_CHECK"] = true;
			}

			if (
				$_REQUEST["askaron_pro1c_iblock_catalog"] > 0
					&&
				isset( $arResult["IBLOCK_LIST"][ $_REQUEST["askaron_pro1c_iblock_catalog"] ] )
			)
			{
				$arResult["IBLOCK_CATALOG"] = $_REQUEST["askaron_pro1c_iblock_catalog"];

				$res = \CIBlockProperty::GetList( array("SORT" => "ASC"), array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
					"ACTIVE" => "Y",
					"PROPERTY_TYPE" => "S",
					"MULTIPLE" => "N",

				) );
				while( $arFields = $res->Fetch() )
				{
					if ($arFields["CODE"] !== "ASKARON_PRO1C_OLD_XML_ID")
					{
						$arResult["IBLOCK_CATALOG_PROP_LIST"][$arFields["ID"]] = array(
							"ID" => $arFields["ID"],
							"CODE" => $arFields["CODE"],
							"NAME" => $arFields["NAME"],
						);
					}
				}


				if ( $_REQUEST["askaron_pro1c_iblock_catalog_prop"]
					&& isset( $arResult["IBLOCK_CATALOG_PROP_LIST"][ $_REQUEST["askaron_pro1c_iblock_catalog_prop"] ] ) )
				{
					$arResult["IBLOCK_CATALOG_PROP_ID"] = $_REQUEST["askaron_pro1c_iblock_catalog_prop"];
				}
			}

			if (
				$_REQUEST["askaron_pro1c_iblock_catalog2"] > 0
				&&
				isset( $arResult["IBLOCK_LIST"][ $_REQUEST["askaron_pro1c_iblock_catalog2"] ] )
			)
			{
				$arResult["IBLOCK_CATALOG2"] = $_REQUEST["askaron_pro1c_iblock_catalog2"];

				$res = \CIBlockProperty::GetList( array("SORT" => "ASC"), array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG2"],
					"ACTIVE" => "Y",
					"PROPERTY_TYPE" => "S",
					"MULTIPLE" => "N",
				) );
				while( $arFields = $res->Fetch() )
				{
					if ($arFields["CODE"] !== "ASKARON_PRO1C_OLD_XML_ID")
					{
						$arResult["IBLOCK_CATALOG2_PROP_LIST"][$arFields["ID"]] = array(
							"ID" => $arFields["ID"],
							"CODE" => $arFields["CODE"],
							"NAME" => $arFields["NAME"],
						);
					}
				}

				if ( $_REQUEST["askaron_pro1c_iblock_catalog2_prop"]
					&& isset( $arResult["IBLOCK_CATALOG2_PROP_LIST"][ $_REQUEST["askaron_pro1c_iblock_catalog2_prop"] ] ) )
				{
					$arResult["IBLOCK_CATALOG2_PROP_ID"] = $_REQUEST["askaron_pro1c_iblock_catalog2_prop"];
				}
			}

			if ($_REQUEST["askaron_pro1c_find_by"])
			{
				$arResult["FIND_BY"] = $_REQUEST["askaron_pro1c_find_by"];
			}

			if ( isset($_REQUEST["askaron_pro1c_copy_xml_id"] ) && $_REQUEST["askaron_pro1c_copy_xml_id"] == "Y")
			{
				$arResult["COPY_XML_ID"] = true;
			}

		}

		if ($arResult["IBLOCK_CATALOG"] > 0 && $arResult["IBLOCK_CATALOG2"] > 0)
		{
			if ($arResult["IBLOCK_CATALOG"] == $arResult["IBLOCK_CATALOG2"])
			{
				$arResult["ERROR"] = "Выбраны одинаковые инфоблоки";
			}


			if (!$arResult["ERROR"])
			{
				$arResult["RUN"] = true;

				$arFilter = array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
					//"%NAME" => "Глазки со зрачком с заглушками Гамма",
				);

				if ( $arResult["IBLOCK_CATALOG_ACTIVE_CHECK"] )
				{
					$arFilter["ACTIVE"] = "Y";
				}

				$arSelect = array(
					"ID",
					"XML_ID",
					"CODE",
					"NAME",
					"ACTIVE"
				);
				if ( $arResult["IBLOCK_CATALOG_PROP_ID"] )
				{
					$arSelect[] = "PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"];
				}

				$res = \CIBlockElement::GetList(  array( "NAME" => "ASC" ), $arFilter, false, false, $arSelect );
				while($arFileds = $res->Fetch())
				{
					//$arFileds["ARTICLE"] = $arFileds["PROPERTY_ARTNUMBER_VALUE"];
					$arResult["ITEMS_CATALOG"][ $arFileds["ID"] ] = array(
						"ID" => $arFileds["ID"],
						"CODE" => $arFileds["CODE"],
						"XML_ID" => trim($arFileds["XML_ID"]),
						"NAME" => trim( preg_replace('|[\s]+|s', ' ', $arFileds["NAME"]) ), // удалить двойные пробелы из названия
						"PROP" => trim($arFileds[  "PROPERTY_".$arResult["IBLOCK_CATALOG_PROP_ID"]."_VALUE" ]),
						"ACTIVE" => $arFileds["ACTIVE"],
					);
				}


				$arFilter = array(
					"IBLOCK_ID" => $arResult["IBLOCK_CATALOG2"],
					//"%NAME" => "Глазки со зрачком с заглушками Гамма",
				);

				$arSelect = array(
					"ID",
					"XML_ID",
					"CODE",
					"NAME",
					"ACTIVE"
				);
				if ( $arResult["IBLOCK_CATALOG2_PROP_ID"] )
				{
					$arSelect[] = "PROPERTY_".$arResult["IBLOCK_CATALOG2_PROP_ID"];
				}


				$res = CIBlockElement::GetList( array( "NAME" => "ASC" ), $arFilter, false, false, $arSelect );
				while($arFileds = $res->Fetch())
				{
					//$arFileds["ARTICLE"] = $arFileds["PROPERTY_CML2_ARTICLE_VALUE"];
					//$arResult["ITEMS_CATALOG2"][ $arFileds["ID"] ] = $arFileds;

					$arResult["ITEMS_CATALOG2"][ $arFileds["ID"] ] = array(
						"ID" => $arFileds["ID"],
						"CODE" => $arFileds["CODE"],
						"XML_ID" => trim($arFileds["XML_ID"]),
						"NAME" => trim( preg_replace('|[\s]+|s', ' ',  $arFileds["NAME"] ) ), // удалить двойные пробелы из названия
						"PROP" => trim($arFileds[  "PROPERTY_".$arResult["IBLOCK_CATALOG2_PROP_ID"]."_VALUE" ]),
						"ACTIVE" => $arFileds["ACTIVE"],
					);
				}

				$arItems =  $arResult["ITEMS_CATALOG"];
				$arItems2 =  $arResult["ITEMS_CATALOG2"];

				$arResult["ITEMS_CATALOG2_NOT_EQUAL_XML_ID"] = $arResult["ITEMS_CATALOG2"];
				$arResult["ITEMS_CATALOG2_NOT_EQUAL"] = $arResult["ITEMS_CATALOG2"];

				//d($arItems2);
				foreach ( $arItems as $key => $arItem )
				{
					$arNewItem = array(
						"ID" => $arItem["ID"],
						"NAME" => $arItem["NAME"],
						"ACTIVE" => $arItem["ACTIVE"],
						"PROP" => $arItem["PROP"],
						"XML_ID" => $arItem["XML_ID"],

						"COMPARE_ITEMS" => array(),
						"XML_ID_CHECKED" => false,
						"IS_CATALOG_ITEM" => true,
					);

					foreach ( $arItems2 as $key2 => $arItem2 )
					{
						//d($arItem);
						//d($arItem2);

						$compare_by = "";

						if ( mb_strlen( $arItem["XML_ID"] ) > 0 &&  $arItem["XML_ID"] === $arItem2[ "XML_ID" ] )
						{
							$compare_by = "XML_ID";

							$arNewItem["XML_ID_CHECKED"] = true;
							unset($arResult["ITEMS_CATALOG2_NOT_EQUAL_XML_ID"][ $arItem2["ID"] ]);
							unset($arResult["ITEMS_CATALOG2_NOT_EQUAL"][ $arItem2["ID"] ]);
						}
						elseif (
								$arResult["FIND_BY"] == "NAME_AND_PROP"
							&&
								mb_strlen( $arItem["NAME"] ) > 0 &&  $arItem["NAME"] === $arItem2[ "NAME" ]
							&&
								mb_strlen( $arItem["PROP"] ) > 0 &&  $arItem["PROP"] === $arItem2[ "PROP" ]
						)
						{
							$compare_by = "NAME_AND_PROP";
							unset($arResult["ITEMS_CATALOG2_NOT_EQUAL"][ $arItem2["ID"] ]);
						}
						elseif (
							$arResult["FIND_BY"] == "NAME"
								&&
							mb_strlen( $arItem["NAME"] ) > 0 &&  $arItem["NAME"] === $arItem2[ "NAME" ]
						)
						{
							$compare_by = "NAME";
							unset($arResult["ITEMS_CATALOG2_NOT_EQUAL"][ $arItem2["ID"] ]);
						}
						elseif (
							$arResult["FIND_BY"] == "PROP"
								&&
							mb_strlen( $arItem["PROP"] ) > 0 &&  $arItem["PROP"] === $arItem2[ "PROP" ]
						)
						{
							$compare_by = "PROP";
							unset($arResult["ITEMS_CATALOG2_NOT_EQUAL"][ $arItem2["ID"] ]);
						}

						if ( mb_strlen($compare_by) > 0 )
						{
							$arNewItem["ITEMS_COMPARE"][ $arItem2["ID"] ] = array(
								"ID" => $arItem2["ID"],
								"NAME" => $arItem2["NAME"],
								"ACTIVE" => $arItem2["ACTIVE"],
								"PROP" => $arItem2["PROP"],
								"XML_ID" => $arItem2["XML_ID"],
								"COMPARE_BY" => $compare_by,
							);
						}
					}

					$arResult["ITEMS_COMPARE"][ $arNewItem["ID"] ] = $arNewItem;
				}

				// скопировать XML_ID!
				if (  $RIGHT_W )
				{
					if ( $arResult["COPY_XML_ID"] )
					{
						$find_by = $arResult["FIND_BY"];
						if ($find_by=="NAME" || $find_by=="PROP" || $find_by=="NAME_AND_PROP")
						{
							//$arResult["IBLOCK_CATALOG"]


							$arFields = array(
								"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"],
								"CODE" => "ASKARON_PRO1C_OLD_XML_ID",
							);

							$res = \CIBlockProperty::GetList( array("SORT" => "ASC"), $arFields );
							if( $arFields = $res->Fetch() )
							{
							}
							else
							{
								$arFieldsProp = Array(
									"NAME" => "Продвинутый обмен с 1С. Старый XML_ID (свойство можно удалить)",
									"ACTIVE" => "Y",
									"SORT" => "100",
									"CODE" => "ASKARON_PRO1C_OLD_XML_ID",
									"PROPERTY_TYPE" => "S",
									"IBLOCK_ID" => $arResult["IBLOCK_CATALOG"]
								);
								$ibp = new CIBlockProperty;
								$PropID = $ibp->Add($arFieldsProp);
							}

							$count_updated = 0;
							foreach ( $arResult["ITEMS_COMPARE"] as $arCompareItem )
							{
								if (!$arCompareItem["XML_ID_CHECKED"])
								{
									if ( $arCompareItem["ITEMS_COMPARE"] )
									{
										foreach ($arCompareItem["ITEMS_COMPARE"] as $arItem2 )
										{
											if ( $arItem2["COMPARE_BY"] == $find_by )
											{
												if ( mb_strlen($arItem2["XML_ID"]) > 0 && $arItem2["XML_ID"]!==$arCompareItem["XML_ID"] )
												{
													\CIBlockElement::SetPropertyValuesEx(
														$arCompareItem["ID"],
														$arResult["IBLOCK_CATALOG"],
														array(
															"ASKARON_PRO1C_OLD_XML_ID" => $arCompareItem["XML_ID"],
														)
													);

													$arFieldsUpdate = array(
														"XML_ID" => $arItem2["XML_ID"]
													);
													$el = new \CIBlockElement;
													if ($el->Update( $arCompareItem["ID"], $arFieldsUpdate  )  )
													{
														$count_updated++;
													}
												}
											}
										}
									}
								}
							}

							$path = $APPLICATION->GetCurPageParam(
								"updated=OK&count_updated=".$count_updated,
								array("askaron_pro1c_copy_xml_id", "updated", "count_updated")
							);
							LocalRedirect($path);
						}
					}
				}



				$arResult["IBLOCK_CATALOG_COUNT"] = count( $arResult["ITEMS_COMPARE"] );
				foreach ($arResult["ITEMS_COMPARE"] as $arCompareItem)
				{
					if ( $arCompareItem["XML_ID_CHECKED"] )
					{
						$arResult["IBLOCK_CATALOG_CHECKED_BY_XML_ID_COUNT"]++;
					}
				}

				// добавим в массив элементов из рабочего каталога, элементы из тестового каталога (которые не связаны по XML_ID)
				foreach ($arResult["ITEMS_CATALOG2_NOT_EQUAL"] as $arItem)
				{
					$arNewItem = array(
						"ID" => $arItem["ID"],
						"NAME" => $arItem["NAME"],
						"ACTIVE" => $arItem["ACTIVE"],
						"PROP" => $arItem["PROP"],
						"XML_ID" => $arItem["XML_ID"],

						"COMPARE_ITEMS" => array(),
						"XML_ID_CHECKED" => false,
						"IS_CATALOG_ITEM" => false, //!! important
					);

					$arResult["ITEMS_COMPARE"][  $arNewItem["ID"] ] = $arNewItem;
				}

				uasort( $arResult["ITEMS_COMPARE"], function ($arA, $arB){
					return strnatcmp( $arA["NAME"] , $arB["NAME"] );
				} );

				//d($arResult["ITEMS_CATALOG2_NOT_EQUAL_XML_ID"]);



				// Конец вычислений.
			}
		}

		//dd($arResult);


		// Title
		$APPLICATION->SetTitle("Сравнение элементов инфоблоков");
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
		<form method="GET" action="">
			<?=bitrix_sessid_post()?>
			<table>
				<tr>
					<td>Рабочий инфоблок на сайте<br>
						<select name="askaron_pro1c_iblock_catalog">
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
					</td>
					<td>
					</td>

					<td>Тестовый инфоблок из 1С<br>
						<select name="askaron_pro1c_iblock_catalog2">
							<option value="">не выбрано</option>
							<? foreach ($arResult["IBLOCK_LIST"] as $arItem):?>
								<option
									value="<?=$arItem["ID"]?>"
									<? if ($arItem["ID"] == $arResult["IBLOCK_CATALOG2"]):?>
										selected
									<?endif ?>
								>[<?=$arItem["ID"]?>] <?=$arItem["NAME"]?></option>
							<?endforeach ?>
						</select>
						<br><br>
					</td>
				</tr>
				<tr>
					<td><label for="askaron_pro1c_catalog_active_check">
							<input
								id="askaron_pro1c_catalog_active_check"
								name="askaron_pro1c_catalog_active_check"
								type="checkbox"
								value="Y"
								<?if ( $arResult["IBLOCK_CATALOG_ACTIVE_CHECK"] ):?>
									checked
								<?endif?>
							> Только активные элементы </label>
							<br><br>
					</td>

					<td>
					</td>

					<td>
					</td>
				</tr>
				<tr>
					<td>Свойство (например, артикул)<br>
						<select name="askaron_pro1c_iblock_catalog_prop">
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
						<br><br>
					</td>
					<td>
					</td>

					<td>Свойство (например, артикул)<br>
						<select name="askaron_pro1c_iblock_catalog2_prop">
							<option value="">не выбрано</option>
							<? foreach ($arResult["IBLOCK_CATALOG2_PROP_LIST"] as $arItem):?>
								<option
										value="<?=$arItem["ID"]?>"
									<? if ($arItem["ID"] == $arResult["IBLOCK_CATALOG2_PROP_ID"]):?>
										selected
									<?endif ?>
								>[<?=$arItem["ID"]?>] [<?=htmlspecialcharsbx($arItem["CODE"])?>] <?=htmlspecialcharsbx($arItem["NAME"])?></option>
							<?endforeach ?>
						</select>
						<br><br>
					</td>
				</tr>
				<tr>
					<td>
						<label for="askaron_pro1c_hide_equal_xml_id">
							<input
									id="askaron_pro1c_hide_equal_xml_id"
									name="askaron_pro1c_hide_equal_xml_id"
									type="checkbox"
									value="Y"
									<?if ( $arResult["HIDE_EQUAL_XML_ID"] ):?>
										checked
									<?endif?>
							> Скрыть товары из рабочего каталога, если найдено совпадение по XML_ID </label>
						<br><br>
					</td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Найти элементы про признаку (кроме XML_ID):
						<br>

						<label for="askaron_pro1c_find_by_1">
							<input
									id="askaron_pro1c_find_by_1"
									name="askaron_pro1c_find_by"
									type="radio"
									value=""
								<?if ( $arResult["FIND_BY"] == "" ):?>
									checked
								<?endif?>
							>не искать</label>
						<br>
						<label for="askaron_pro1c_find_by_2">
							<input
									id="askaron_pro1c_find_by_2"
									name="askaron_pro1c_find_by"
									type="radio"
									value="NAME"
								<?if ( $arResult["FIND_BY"] == "NAME" ):?>
									checked
								<?endif?>
							>если совпадает название</label>
						<br>
						<label for="askaron_pro1c_find_by_3">
							<input
									id="askaron_pro1c_find_by_3"
									name="askaron_pro1c_find_by"
									type="radio"
									value="PROP"
								<?if ( $arResult["FIND_BY"] == "PROP" ):?>
									checked
								<?endif?>
							>если совпадает свойство</label>
						<br>
						<label for="askaron_pro1c_find_by_4">
							<input
									id="askaron_pro1c_find_by_4"
									name="askaron_pro1c_find_by"
									type="radio"
									value="NAME_AND_PROP"
								<?if ( $arResult["FIND_BY"] == "NAME_AND_PROP" ):?>
									checked
								<?endif?>
							>если совпадает название и свойство</label>
						<br><br>


						<label for="askaron_pro1c_copy_xml_id"><input
							id="askaron_pro1c_copy_xml_id"
							name="askaron_pro1c_copy_xml_id"
							type="checkbox"
							value="Y"
							<?if ( $arResult["COPY_XML_ID"] ):?>
								checked
							<?endif?>
							>
							Скопировать XML_ID из найденых совпадающих по признаку
							<br>из элементов тестового инфоблока в элементы рабочего инфоблока
							<br>(только для тех, у которых нет совпадающих по XML_ID)
						</label>
						<br><br>



					</td>
					<td></td>
					<td></td>
				</tr>
			</table>
			<br>
			<input type="submit" name="askaron_pro1c_update" value="Обновить"/>
			<input type="hidden" name="askaron_pro1c_update" value="Y"/>
			<input type="hidden" name="lang" value="<?=LANGUAGE_ID?>"/>
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

			<?//d($arResult)?>

			<?if ( $arResult["ITEMS_COMPARE"]):?>

				<table class="adm-detail-content-table" cellpadding="3" style="background-color: #FFF; text-align: left;">
					<tr style="text-align: center; font-weight: bold;">
						<td colspan="5">Рабочий инфоблок на сайте</td>
						<td>Совпадает&nbsp;по</td>
						<td colspan="5">Тестовый инфоблок из 1С</td>
					</tr>
					<tr>
						<td colspan="5">
							Всего в рабочем инфоблоке <?=$arResult["IBLOCK_CATALOG_COUNT"]?>,
								совпадает по XML_ID <?=$arResult["IBLOCK_CATALOG_CHECKED_BY_XML_ID_COUNT"]?>,
								осталось сопоставить  <?=$arResult["IBLOCK_CATALOG_COUNT"] - $arResult["IBLOCK_CATALOG_CHECKED_BY_XML_ID_COUNT"]?>
						</td>
						<td>
						</td>
						<td colspan="5">
							Всего в тестовом инфоблоке
							<?=count( $arResult["ITEMS_CATALOG2"] );?>, совпадает по XML_ID
							<?=( count( $arResult["ITEMS_CATALOG2"] ) - count( $arResult["ITEMS_CATALOG2_NOT_EQUAL_XML_ID"] ));?>,
							не совпадает по XML_ID <?=count($arResult["ITEMS_CATALOG2_NOT_EQUAL_XML_ID"]);?>
						</td>
					</tr>
					<tr style="font-weight: bold;">
						<td>ID</td>
						<td>Активность</td>
						<td>Название</td>
						<td>XML_ID</td>
						<td>Свойство</td>

						<td></td>

						<td>ID</td>
						<td>Активность</td>
						<td>Название</td>
						<td>XML_ID</td>
						<td>Свойство</td>

					</tr>
					<?$index=1;?>

					<?
						$arCompareVariant = array(
							"XML_ID" => "XML_ID",
							"NAME" => "по названию",
							"PROP" => "по свойству",
							"NAME_AND_PROP" => "по названию и свойству",
						)
					?>

					<?foreach ( $arResult["ITEMS_COMPARE"] as $arCompareItem):?>
						<?if ( $arCompareItem["IS_CATALOG_ITEM"] == true ):?>
							<?if ( !($arResult["HIDE_EQUAL_XML_ID"] && $arCompareItem["XML_ID_CHECKED"]) ):?>
								<?if ( $arCompareItem["ITEMS_COMPARE"] ):?>
									<?$index2=1;?>
									<?foreach ($arCompareItem["ITEMS_COMPARE"] as $arItem2 ):?>
										<tr
											<?if ( $index%2 == 0 ):?>
												style="background-color: #F5F9F9;"
											<?endif?>
										>
											<?if ($index2 == 1):?>
												<td><?=$arCompareItem["ID"]?></td>
												<td><?=$arCompareItem["ACTIVE"]?></td>
												<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["NAME"] )?></span></td>
												<td><?=htmlspecialcharsbx( $arCompareItem["XML_ID"] )?></td>
												<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["PROP"] )?></span></td>
											<?else:?>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
											<?endif?>

											<td><?=htmlspecialcharsbx( $arCompareVariant[ $arItem2["COMPARE_BY"] ] )?></td>

											<td><?=$arItem2["ID"]?></td>
											<td><?=$arItem2["ACTIVE"]?></td>
											<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arItem2["NAME"] )?></span></td>
											<td><?=htmlspecialcharsbx( $arItem2["XML_ID"] )?></td>
											<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arItem2["PROP"] )?></span></td>
										</tr>
										<?$index2++;?>
									<?endforeach?>
								<?else:?>
									<tr
										<?$background_color = "";?>
										<?if ( $index%2 == 0 ):?>
											<?$background_color = "background-color: #F5F9F9;";?>
										<?endif?>
										style="color: #C00; <?=$background_color?>"

									>
										<td><?=$arCompareItem["ID"]?></td>
										<td><?=$arCompareItem["ACTIVE"]?></td>
										<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["NAME"] )?></span></td>
										<td><?=htmlspecialcharsbx( $arCompareItem["XML_ID"] )?></td>
										<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["PROP"] )?></span></td>

										<td></td>

										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								<?endif?>
								<?$index++;?>
							<?endif?>
						<?else:?>
							<tr
								<?$background_color = "";?>
								<?if ( $index%2 == 0 ):?>
									<?$background_color = "background-color: #F5F9F9;";?>
								<?endif?>
								style="color: #00C; <?=$background_color?>"

							>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>

								<td></td>

								<td><?=$arCompareItem["ID"]?></td>
								<td><?=$arCompareItem["ACTIVE"]?></td>
								<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["NAME"] )?></span></td>
								<td><?=htmlspecialcharsbx( $arCompareItem["XML_ID"] )?></td>
								<td><span style="white-space: pre-wrap"><?=htmlspecialcharsbx( $arCompareItem["PROP"] )?></span></td>
							</tr>
							<?$index++;?>
						<?endif?>
					<?endforeach?>

				</table>

			<?endif?>
		<?endif?>
		<?
	}
}
?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>
