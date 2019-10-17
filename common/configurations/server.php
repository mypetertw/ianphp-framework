<?
/**
 * START SESSION
 * @global
 */
if (!isset($_SESSION)) {
    session_start();
}

/**
 * HEADER
 */
header('Content-Type: text/html; charset=utf-8');

/**
 * ERROR SETTING
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
 * DEFINE HTML TAGS
 */
define('BODY_START', '</head><body>');
define('BODY_END', '</body></html>');
define('HTML_START', '<!DOCTYPE html><html><head>');
define('VIEWPORT', '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">');

/**
 * @param array
 */
$BASIC_LAYOUT = [
    '<div id="gotop">↑</div>',
    '<div class="notification-message"></div>',
    '<div class="load"></div>',
    '<div class="progress"></div>',
    '<div class="display-none page-loading-layout page-loading-layout-evt"><div class="page-loading-icon translate-middle"><img src="/images/loading.svg"></div></div>',
];

/**
 * MEMORY
 */
ini_set('memory_limit', '-1');
