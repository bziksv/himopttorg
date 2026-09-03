<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

$himoptLocal = in_array($_SERVER["REMOTE_ADDR"] ?? "", ["127.0.0.1", "::1"], true);
if (!$USER->IsAdmin() && !$himoptLocal) {
	LocalRedirect("/bitrix/admin/himopttorg_sverka_1c.php");
}

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/php_interface/include/himopttorg_sverka_1c.php");
himopttorg_sverka_render();
