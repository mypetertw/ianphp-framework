<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| VARIABLE CONFIGS
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
    'SLACK_API' => 'https://hooks.slack.com/services/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',
    'VIEWS_MENU' => ROOT . '/admin/views/menu.php',
];
