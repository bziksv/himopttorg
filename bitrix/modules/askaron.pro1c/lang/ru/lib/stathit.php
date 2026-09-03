<?
namespace Askaron\Pro1c;

use Bitrix\Main\Entity;
use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Type;
//use Bitrix\Main\Localization\Loc;
//Loc::loadMessages(__FILE__);

class StatHitTable extends Entity\DataManager
{
	public static function getTableName()
    {
        return 'b_askaron_pro1c_stat_hit';
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
			new Entity\StringField('PATH', array(
				)
			),
			new Entity\StringField('ANSWER',	array(
				)
			),
			new Entity\IntegerField('SESSION_ID', array(
					'required' => true,
				)
			),
			new Entity\ReferenceField('SESSION',
				'\Askaron\Pro1c\StatSessionTable',
				array('=this.SESSION_ID' => 'ref.ID')
			),
			new Entity\IntegerField('IMPORT_FILE_ID', array(
				)
			),
			new Entity\ReferenceField('IMPORT_FILE',
				'\Askaron\Pro1c\StatImportFileTable',
				array('=this.IMPORT_FILE_ID' => 'ref.ID')
			),
			new Entity\IntegerField('USER_ID', array(
				)
			),
			new Entity\StringField('IP', array(
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
			new Entity\DatetimeField( 'TIME_END', array(
			)),
			new Entity\StringField('REQUEST_METHOD', array(
				)
			),
			new Entity\StringField('SERVER_NAME', array(
				)
			),
			new Entity\StringField('FILE', array(
				)
			),
			new Entity\StringField('EXCHANGE_TYPE', array(
				)
			),
			new Entity\StringField('EXCHANGE_MODE', array(
				)
			),
			new Entity\StringField('EXCHANGE_IMPORT_FILE_TYPE', array(
				)
			),
			new Entity\StringField('EXCHANGE_IMPORT_FILE_NAME', array(
				)
			),
			new Entity\StringField('INFO', array(
				)
			),
			new Entity\IntegerField('IBLOCK_ELEMENT_ADD_COUNT', array(
					'default_value' => 0,
				)
			),
			new Entity\IntegerField('IBLOCK_ELEMENT_UPDATE_COUNT', array(
					'default_value' => 0,
				)
			),
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
}