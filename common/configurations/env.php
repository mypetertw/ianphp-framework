<?
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
