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
		$arResult = array(
			"copy_dir_size" => 0,
			"logs_dir_size" => 0,
			//"WARNING" => "",
		);


		$connection_name = \Bitrix\Main\Config\Option::get( "askaron.pro1c", "connection_name" );
		$connection = \Bitrix\Main\Application::getConnection( $connection_name );




		if ( check_bitrix_sessid() && $RIGHT_W )
		{
			if ( mb_strlen ($_REQUEST['clear_copy_dir_size'] ) > 0 )
			{
				DeleteDirFilesEx("/upload/1c_catalog_copy_askaron_pro1c/");
				CheckDirPath( $_SERVER["DOCUMENT_ROOT"]."/upload/1c_catalog_copy_askaron_pro1c/" );
			}

			if ( mb_strlen ($_REQUEST['clear_logs_dir_size'] ) > 0 )
			{
				DeleteDirFilesEx("/bitrix/tmp/hit_logs_askaron_pro1c/");
				CheckDirPath( $_SERVER["DOCUMENT_ROOT"]."/bitrix/tmp/hit_logs_askaron_pro1c/" );
			}

			if ( $connection->getType() == "mysql" )
			{
				if ( mb_strlen ($_REQUEST['clear_hit_table'] ) > 0 )
				{
					$connection->truncateTable( "b_askaron_pro1c_stat_hit" );
					DeleteDirFilesEx("/bitrix/tmp/hit_logs_askaron_pro1c/");
					CheckDirPath( $_SERVER["DOCUMENT_ROOT"]."/bitrix/tmp/hit_logs_askaron_pro1c/" );

					\Askaron\Pro1c\Tools::setSessionValue( "askaron_pro1c_stat_session_id", null);
					\Askaron\Pro1c\Tools::setSessionValue( "askaron_pro1c_stat_import_file_id",  null );
				}

				if ( mb_strlen ($_REQUEST['clear_all_tables'] ) > 0 )
				{
					$connection->truncateTable( "b_askaron_pro1c_stat_session_group" );
					$connection->truncateTable( "b_askaron_pro1c_stat_session" );
					$connection->truncateTable( "b_askaron_pro1c_stat_import_file" );
					$connection->truncateTable( "b_askaron_pro1c_stat_hit" );

					DeleteDirFilesEx("/bitrix/tmp/hit_logs_askaron_pro1c/");
					CheckDirPath( $_SERVER["DOCUMENT_ROOT"]."/bitrix/tmp/hit_logs_askaron_pro1c/" );

					\Askaron\Pro1c\Tools::setSessionValue( "askaron_pro1c_stat_session_id", null);
					\Askaron\Pro1c\Tools::setSessionValue( "askaron_pro1c_stat_import_file_id",  null );
				}
			}



			//clear_hit_table

			//clear_all_tables
		}

		if ( is_dir( $_SERVER["DOCUMENT_ROOT"]."/upload/1c_catalog_copy_askaron_pro1c" ) )
		{
			$arResult["copy_dir_size"] = \Askaron\Pro1c\Tools::dir_size($_SERVER["DOCUMENT_ROOT"]."/upload/1c_catalog_copy_askaron_pro1c");
		}


		if ( is_dir( $_SERVER["DOCUMENT_ROOT"]."/bitrix/tmp/hit_logs_askaron_pro1c" ) )
		{
			$arResult["logs_dir_size"] = \Askaron\Pro1c\Tools::dir_size($_SERVER["DOCUMENT_ROOT"]."/bitrix/tmp/hit_logs_askaron_pro1c");
		}


		/*
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
		*/

		// Title
		$APPLICATION->SetTitle("Очистка данных");
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

			Копии файлов обмена
			<a
				target="_blank"
				href="fileman_admin.php?PAGEN_1=&SIZEN_1=100&amp;lang=<?=LANGUAGE_ID?>&amp;path=<?=urlencode("/upload/1c_catalog_copy_askaron_pro1c" )?>">/upload/1c_catalog_copy_askaron_pro1c</a>
			<?=CFile::FormatSize( $arResult["copy_dir_size"] )?>
			<br><br>
			<input type="submit" name="clear_copy_dir_size" value="Очистить" />

			<br><br>
			<br><br>
			Логи шагов обмена
			<a
				target="_blank"
				href="fileman_admin.php?PAGEN_1=&SIZEN_1=100&amp;lang=<?=LANGUAGE_ID?>&amp;path=<?=urlencode("/bitrix/tmp/hit_logs_askaron_pro1c" )?>&amp;by=name_nat&amp;order=desc">/bitrix/tmp/hit_logs_askaron_pro1c</a>
			<?=CFile::FormatSize( $arResult["logs_dir_size"] )?>
			<br><br>
			<input type="submit" name="clear_logs_dir_size" value="Очистить" />

			<?if ( $connection->getType() == "mysql" ):?>
				<br><br>
				<br><br>
				Очистка таблиц модуля
				<br><br>
				<table cellpadding="5">
					<tr>
						<td>Последовательности сессий
							<br>b_askaron_pro1c_stat_session_group</td>

						<td><?
							$arInfo = \Askaron\Pro1c\Tools::GetTableSize( "b_askaron_pro1c_stat_session_group" );
							echo \CFile::FormatSize( $arInfo["total_size"] );
							?></td>
						<td></td>
					</tr>
					<tr>
						<td>Сессии обмена
							<br>b_askaron_pro1c_stat_session</td>
						<td><?
							$arInfo = \Askaron\Pro1c\Tools::GetTableSize( "b_askaron_pro1c_stat_session" );
							echo \CFile::FormatSize( $arInfo["total_size"] );
							?></td>
						<td></td>
					</tr>
					<tr>
						<td>Файлы импорта
							<br>b_askaron_pro1c_stat_import_file</td>
						<td><?
							$arInfo = \Askaron\Pro1c\Tools::GetTableSize( "b_askaron_pro1c_stat_import_file" );
							echo \CFile::FormatSize( $arInfo["total_size"] );
							?></td>
						<td></td>
					</tr>
					<tr>
						<td>Шаги обмена
							<br>b_askaron_pro1c_stat_hit</td>
						<td><?
							$arInfo = \Askaron\Pro1c\Tools::GetTableSize( "b_askaron_pro1c_stat_hit" );
							echo \CFile::FormatSize( $arInfo["total_size"] );
							?></td>
						<td><input type="submit" name="clear_hit_table" value="Очистить таблицу хитов" /></td>
					</tr>
				</table>

				<br><br>
				<input type="submit" name="clear_all_tables" value="Очистить таблицы" />
				<input type="hidden" name="lang" value="<?=LANGUAGE_ID?>" />
			<?endif?>

		</form>

		<?
//		if ($_REQUEST["updated"])
//		{
//			echo '<br><br>';
//			CAdminMessage::ShowMessage(
//				Array(
//					"TYPE" => "OK",
//					"MESSAGE" => htmlspecialcharsbx($_REQUEST["count_updated"])." XML_ID обновлены",
//					"DETAILS" => "",
//					"HTML" => true
//				)
//			);
//		}
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
