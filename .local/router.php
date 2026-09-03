<?php
$uri = urldecode(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
$root = $_SERVER['DOCUMENT_ROOT'];
$file = $root . $uri;

if ($uri !== '/' && is_file($file)) {
    return false;
}

$dir = is_dir($file) ? rtrim($file, '/') : $root;
if ($uri === '/' || is_dir($file)) {
    $index = $dir . '/index.php';
    if (is_file($index)) {
        $_SERVER['SCRIPT_NAME'] = ($uri === '/' ? '/index.php' : rtrim($uri, '/') . '/index.php');
        $_SERVER['SCRIPT_FILENAME'] = $index;
        chdir(dirname($index));
        require $index;
        return true;
    }
}

$_SERVER['SCRIPT_FILENAME'] = $root . '/bitrix/urlrewrite.php';
require $root . '/bitrix/urlrewrite.php';
