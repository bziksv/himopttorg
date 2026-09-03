<?
$global_path = $_SERVER ['DOCUMENT_ROOT'] . "/";
$path_modules = $global_path . 'modules/';
$path_img = $global_path . 'img/';
$path_banners = $global_path . 'upload/banners/'; //Баннеры
$path_banners_view = '/upload/banners/'; //Баннеры с браузера
$path_conf = $global_path . 'classes/';
$path_templates = $global_path . 'templates/';

/**
 * Доступ к базе данных MYSQL
 */
$dbhost = "localhost";
$dbuser = "u472_him";
$dbpass = "pZSJxqB8";
$dbname = "u472_him";

/**
 * Отсылка E-mail
 */
$_conf ['sendmail'] ['from_name'] = 'СПУТНИК';
$_conf ['sendmail'] ['from_mail'] = 'no_reply@' . $_SERVER ['HTTP_HOST'];

?>