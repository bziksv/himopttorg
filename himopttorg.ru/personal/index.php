<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Персональный раздел");
?>
<div class="block">
	<?
	$APPLICATION->IncludeComponent("bitrix:breadcrumb", ".default", array(
		"START_FROM" => "1",
		"PATH" => "",
		"SITE_ID" => "-"
		),
		false,
		Array('HIDE_ICONS' => 'Y')
	);
	?>
  <p>На странице <b>Настройка пользователя</b> пользователь имеет возможность редактировать личные данные, регистрационную информацию, информацию о работе и т. д. Вывод данной формы осуществлен с помощью компонента <i>Параметры пользователя</i>. </p>

</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>