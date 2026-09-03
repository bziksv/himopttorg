<?
namespace Askaron\Pro1c;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type;
//use Bitrix\Main\Localization\Loc;
//Loc::loadMessages(__FILE__);

class StatImportFileTable extends Entity\DataManager
{
	public static function getTableName()
    {
        return 'b_askaron_pro1c_stat_import_file';
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
			new Entity\IntegerField('SESSION_ID', array(
					'required' => true,
				)
			),
			new Entity\ReferenceField('SESSION',
				'\Askaron\Pro1c\StatSessionTable',
				array('=this.SESSION_ID' => 'ref.ID')
			),
			new Entity\StringField('LAST_HIT_PATH', array(
				)
			),
			new Entity\StringField('LAST_HIT_ANSWER', array(
				)
			),
			new Entity\FloatField('TIME_TOTAL',  array(
					'default_value' => 0,
				)
			),
			new Entity\DatetimeField( 'TIME_START', array(
				'required' => true,
				'default_value' => new Type\DateTime(),
			)),
			new Entity\DatetimeField( 'TIME_SUCCESS', array(
			)),
			new Entity\StringField('EXCHANGE_IMPORT_FILE_TYPE', array(
				)
			),
			new Entity\StringField('EXCHANGE_IMPORT_FILE_NAME', array(
				)
			),
			new Entity\StringField('INFO', array(
				)
			),
		);


//		$fieldsMap = array(
//			'ID' => array(
//				'data_type' => 'integer',
//				'primary' => true,
//				'autocomplete' => true,
//				'title' => "ID",
//			),
//			'SESSION_ID' => new Entity\IntegerField('SESSION_ID',
//				array(
//					'title' => "SESSION_ID",
//					'required' => true,
//				)
//			),
//			'SESSION' => new Entity\ReferenceField(
//				'SESSION',
//				'\Askaron\Pro1c\StatSessionTable',
//				array('=this.SESSION_ID' => 'ref.ID')
//			),
//			'USER_ID' => new Entity\IntegerField('USER_ID',
//				array(
//					'title' => "USER_ID"
//				)
//			),
//			'IBLOCK_ELEMENT_ADD_COUNT' => new Entity\IntegerField('IBLOCK_ELEMENT_ADD_COUNT',
//				array(
//					'title' => "IBLOCK_ELEMENT_ADD_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IBLOCK_ELEMENT_UPDATE_COUNT' => new Entity\IntegerField('IBLOCK_ELEMENT_UPDATE_COUNT',
//				array(
//					'title' => "IBLOCK_ELEMENT_UPDATE_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IBLOCK_ELEMENT_DELETE_COUNT' => new Entity\IntegerField('IBLOCK_ELEMENT_DELETE_COUNT',
//				array(
//					'title' => "IBLOCK_ELEMENT_DELETE_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IBLOCK_SECTION_ADD_COUNT' => new Entity\IntegerField('IBLOCK_SECTION_ADD_COUNT',
//				array(
//					'title' => "IBLOCK_SECTION_ADD_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IBLOCK_SECTION_UPDATE_COUNT' => new Entity\IntegerField('IBLOCK_SECTION_UPDATE_COUNT',
//				array(
//					'title' => "IBLOCK_SECTION_UPDATE_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IBLOCK_SECTION_DELETE_COUNT' => new Entity\IntegerField('IBLOCK_SECTION_DELETE_COUNT',
//				array(
//					'title' => "IBLOCK_SECTION_DELETE_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'ORDER_SAVE_COUNT' => new Entity\IntegerField('ORDER_SAVE_COUNT',
//				array(
//					'title' => "ORDER_SAVE_COUNT",
//					'default_value' => 0,
//				)
//			),
//			'IP' => new Entity\StringField('IP',
//				array(
//					'title' => "IP"
//				)
//			),
//			'TIME_TOTAL' => new Entity\FloatField('TIME_TOTAL',
//				array(
//					'title' => "TIME_TOTAL",
//					'default_value' => 0,
//				)
//			),
//			"TIME_START" => new Entity\DatetimeField( 'TIME_START', array(
//				'required' => true,
//				'title' => "TIME_START",
//				'default_value' => new Type\DateTime(),
//			)),
//			"TIME_END" => new Entity\DatetimeField( 'TIME_END', array(
//				'required' => false,
//				'title' => "TIME_END",
//				'default_value' => new Type\DateTime(),
//			)),
//			'REQUEST_METHOD' => new Entity\StringField('REQUEST_METHOD',
//				array(
//					'title' => "REQUEST_METHOD"
//				)
//			),
//			'SERVER_NAME' => new Entity\StringField('SERVER_NAME',
//				array(
//					'title' => "SERVER_NAME"
//				)
//			),
//			'FILE' => new Entity\StringField('FILE',
//				array(
//					'title' => "FILE"
//				)
//			),
//			'PATH' => new Entity\StringField('PATH',
//				array(
//					'title' => "PATH"
//				)
//			),
//			'ANSWER' => new Entity\StringField('ANSWER',
//				array(
//					'title' => "ANSWER"
//				)
//			),
//			'EXCHANGE_TYPE' => new Entity\StringField('EXCHANGE_TYPE',
//				array(
//					'title' => "EXCHANGE_TYPE"
//				)
//			),
//			'EXCHANGE_MODE' => new Entity\StringField('EXCHANGE_MODE',
//				array(
//					'title' => "EXCHANGE_MODE"
//				)
//			),
//			'EXCHANGE_IMPORT_FILE_TYPE' => new Entity\StringField('EXCHANGE_IMPORT_FILE_TYPE',
//				array(
//					'title' => "EXCHANGE_IMPORT_FILE_TYPE"
//				)
//			),
//			'EXCHANGE_IMPORT_FILE_NAME' => new Entity\StringField('EXCHANGE_IMPORT_FILE_NAME',
//				array(
//					'title' => "EXCHANGE_IMPORT_FILE_NAME"
//				)
//			),
//			'HIT_INFO' => new Entity\StringField('HIT_INFO',
//				array(
//					'title' => "HIT_INFO"
//				)
//			),
//		);


		return $fieldsMap;
	}
}
