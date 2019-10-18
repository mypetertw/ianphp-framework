<?
/**
 * START SESSION
 */
if (!isset($_SESSION)) {
    session_start();
}

/**
 * HEADER
 */
header('Content-Type: text/html; charset=utf-8');

/**
 * MEMORY
 */
ini_set('memory_limit', '-1');

/**
 * ERROR DISPLAY
 */
ini_set('display_errors', 0);
error_reporting(E_ALL & ~E_NOTICE);

/**
 * DEFINE SERVER VALUES
 */
define('HOST', $_SERVER['HTTP_HOST']);
define('NOW_SELF', $_SERVER['PHP_SELF']);
define('NOW_URI', $_SERVER['REQUEST_URI']);
define('GET_URI', explode('/', NOW_SELF));
define('HANDLER_SELF', str_replace('.php', '', GET_URI[3]));
define('ROUTER_SELF', str_replace('.php', '', GET_URI[4]));
define('HANDLER', $_GET['handler']);

/**
 * @var DATE
 */
$TIME_NOW = time();

/**
 * @var RWD
 */
$MOBILE = '<div class="display-mobile">';
$DESKTOP = '<div class="display-desktop">';
$END = '</div>';

/**
 * ENV VALUES
 */
if (HOST == DEVELOPMENT) {
    $HOST_URL = 'http://' . DEVELOPMENT;
}

if (HOST == PRODUCTION) {
    $HOST_URL = 'https://' . PRODUCTION;
}

if (HOST == PRODUCTION_WWW) {
    $HOST_URL = 'https://' . PRODUCTION_WWW;
}

$SYSTEM_VARIABLE = [
    'HOST_URL' => $HOST_URL .'/',
    'HOST_URL_NO_SLASH' => $HOST_URL,
    'UPLOAD_ROOT_DIR' => __DIR__ . '/../../',
    'VIEWS_MENU' => ROOT . '/admin/views/menu.php',
];

/**
 * DEFINE SERVER VALUES
 */
define('BODY_START', '</head><body>');
define('BODY_END', '</body></html>');
define('HTML_START', '<!DOCTYPE html><html><head>');
define('VIEWPORT', '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">');
