<?
/*
| NOTE: VARIABLE CONFIGS
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
