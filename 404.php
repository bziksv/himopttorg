<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

if (!defined("ERROR_404"))
{
	define("ERROR_404", "Y");
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

CHTTP::SetStatus("404 Not Found");
$APPLICATION->SetTitle("Страница не найдена");
$APPLICATION->SetPageProperty("title", "Страница не найдена");
$APPLICATION->SetPageProperty("robots", "noindex, follow");

?>
<div class="block">
	<h1>Ошибка 404. Страница не найдена.</h1>
	<p>Возможно, страница была удалена или в адресе допущена ошибка.</p>
	<p>Перейдите в <a href="/catalog/">каталог товаров</a>, воспользуйтесь поиском по сайту или вернитесь на <a href="/">главную страницу</a>.</p>
</div>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
