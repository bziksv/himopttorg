<?
namespace Askaron\Pro1c;

use Bitrix\Main\Entity;
use Bitrix\Main\Type;

//use Bitrix\Main\Localization\Loc;
//Loc::loadMessages(__FILE__);

class StatSessionGroupTable extends Entity\DataManager
{
//	private static $arItemBeforeDelete = array();

	public static function getTableName()
    {
        return 'b_askaron_pro1c_stat_session_group';
    }

	public static function getConnectionName()
	{
		return \Bitrix\Main\Config\Option::get( "askaron.pro1c", "connection_name" );
		//return parent::getConnectionName();
	}

	public static function getMap()
	{
		//global $DB;
		//new Bitrix\Main\Entity\IntegerField;

		$fieldsMap = array(
			new Entity\IntegerField('ID', array(
				'primary' => true,
				'autocomplete' => true,
				//"title" => "ID",
			)),
			new Entity\StringField('LAST_HIT_PATH', array(
				)
			),
			new Entity\StringField('LAST_HIT_ANSWER', array(
				)
			),
			new Entity\IntegerField('USER_ID', array(
				)
			),
			new Entity\IntegerField('SESS_COUNT', array(
					'default_value' => 0
				)
			),
			new Entity\IntegerField('HIT_COUNT', array(
					'default_value' => 0
				)
			),
			new Entity\BooleanField('LAST_EXCHANGE_IMPORT_FILE_SUCCESS', array(
					'values' => array('N', 'Y'),
					'default_value' => "N",
				)
			),
			new Entity\StringField('LAST_HIT_IP', array(
				)
			),
			new Entity\FloatField('TIME_TOTAL',  array(
					'default_value' => 0,
				)
			),
			new Entity\DatetimeField( 'FIRST_HIT_TIME_START', array(
			)),
			new Entity\DatetimeField( 'LAST_HIT_TIME_START', array(
			)),
			new Entity\DatetimeField( 'LAST_HIT_TIME_END', array(
			)),
			new Entity\StringField('LAST_HIT_FILE', array(
				)
			),
			new Entity\StringField('LAST_EXCHANGE_TYPE', array(
				)
			),
			new Entity\StringField('LAST_EXCHANGE_MODE', array(
				)
			),
			new Entity\StringField('LAST_EXCHANGE_IMPORT_FILE_TYPE', array(
				)
			),
//			new Entity\IntegerField('IBLOCK_ELEMENT_ADD_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('IBLOCK_ELEMENT_UPDATE_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('IBLOCK_ELEMENT_DELETE_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('IBLOCK_SECTION_ADD_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('IBLOCK_SECTION_UPDATE_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('IBLOCK_SECTION_DELETE_COUNT', array(
//					'default_value' => 0,
//				)
//			),
//			new Entity\IntegerField('ORDER_SAVE_COUNT', array(
//					'default_value' => 0,
//				)
//			),
		);

		return $fieldsMap;
	}


//	public static function onBeforeUpdate( Entity\Event $event)
//	{
//		$result = new \Bitrix\Main\Entity\EventResult;
//		$data = $event->getParameter('fields');
//
//		$modifyFieldList = array();
//
//		// MODIFIED_BY
//		if ( !array_key_exists( "MODIFIED_BY", $data) )
//		{
//			$currentUserId = null;
//
//			global $USER;
//			if ( is_object($USER) && $USER instanceof \CUser && $USER->IsAuthorized() )
//			{
//				$currentUserId = $USER->GetID();
//			}
//
//			$modifyFieldList["MODIFIED_BY"] = $currentUserId;
//		}
//
//		// TIMESTAMP_X - not null !
//		if ( !isset( $data["TIMESTAMP_X"] ) || !is_object( $data["TIMESTAMP_X"] ) )
//		{
//			$modifyFieldList["TIMESTAMP_X"] = new \Bitrix\Main\Type\DateTime();
//		}
//
//		if ($modifyFieldList)
//		{
//			$result->modifyFields($modifyFieldList);
//		}
//
//		return $result;
//	}


//	public static function OnAfterAdd ( Entity\Event $event )
//	{
//		$arParameters =  $event->getParameters();
//
//		$ID = $arParameters["id"];
//		if ( $ID > 0 )
//		{
//			Init::generateInitClassFile($ID);
//		}
//
//		Init::generateInitFile();
//	}

//	public static function OnAfterUpdate ( Entity\Event $event )
//	{
//		$arParameters =  $event->getParameters();
//
//		$ID = $arParameters["id"]["ID"];
//		if ( $ID > 0 )
//		{
//			Init::generateInitClassFile($ID);
//		}
//
//		Init::generateInitFile();
//	}

//	public static function OnBeforeDelete ( Entity\Event $event )
//	{
//		$arParameters =  $event->getParameters();
//
//		$ID = $arParameters["id"]["ID"];
//		if ( $ID > 0 )
//		{
//			$result = \Askaron\Parallel1c\ExchangeTable::getById( $ID );
//			if ( $arFields = $result->fetch() )
//			{
//				self::$arItemBeforeDelete = $arFields;
//			}
//		}
//	}
//
//
//	public static function OnAfterDelete ( Entity\Event $event )
//	{
//		$arParameters =  $event->getParameters();
//
//		$ID = $arParameters["id"]["ID"];
//		if ( $ID > 0 && $ID == self::$arItemBeforeDelete[ "ID" ] )
//		{
//			\Askaron\Parallel1c\Tools::removeTmpByCode( self::$arItemBeforeDelete[ "CODE" ] );
//		}
//	}
}

