<?php
/**
 * Установка / перерегистрация событий prime.alerts.
 *
 *   /usr/local/bin/php8.3 scripts/install-prime-alerts.php
 *   /usr/local/bin/php8.3 scripts/install-prime-alerts.php --email=hot@hot.vrn.ru --phone='(473) 223-18-14'
 *
 * На регионах после sync-regions: запустить в корне каждой public_html.
 */
$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/..');
$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_HOST'] ?? 'localhost';
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('BX_BUFFER_USED', true);

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

$moduleId = 'prime.alerts';
$email = 'hot@hot.vrn.ru';
$phone = '(473) 223-18-14';

foreach (array_slice($argv ?? [], 1) as $arg) {
	if (strpos($arg, '--email=') === 0) {
		$email = substr($arg, 8);
	} elseif (strpos($arg, '--phone=') === 0) {
		$phone = substr($arg, 8);
	}
}

$path = $_SERVER['DOCUMENT_ROOT'] . '/local/modules/' . $moduleId . '/install/index.php';
if (!is_file($path)) {
	fwrite(STDERR, "Module files missing: {$path}\n");
	exit(1);
}

include_once $path;
if (!class_exists('prime_alerts', false)) {
	fwrite(STDERR, "Class prime_alerts not found\n");
	exit(1);
}

$ob = new prime_alerts();
if (\Bitrix\Main\ModuleManager::isModuleInstalled($moduleId)) {
	$ob->InstallEvents();
	echo "events re-registered\n";
} else {
	if (!$ob->DoInstall()) {
		fwrite(STDERR, "DoInstall failed\n");
		exit(1);
	}
	echo "installed\n";
}

\Bitrix\Main\Config\Option::set($moduleId, 'enabled', 'Y');
\Bitrix\Main\Config\Option::set($moduleId, 'policy_enabled', 'Y');
\Bitrix\Main\Config\Option::set($moduleId, 'policy_register', 'Y');
\Bitrix\Main\Config\Option::set($moduleId, 'policy_order', 'Y');
\Bitrix\Main\Config\Option::set($moduleId, 'support_email', $email);
\Bitrix\Main\Config\Option::set($moduleId, 'support_phone', $phone);

echo "support_email={$email}\n";
echo "support_phone={$phone}\n";
echo "ok\n";
