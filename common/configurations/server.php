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
