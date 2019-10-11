<?php
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once __DIR__ . '/../../root.php';

/*
| NOTE: GET local-config.json
*/
if (file_exists(ROOT . '/local-config.json')) {
    $LOCAL_CONFIG = json_decode(file_get_contents(ROOT . '/local-config.json'), true);
} else {
    exit (header('location: /admin/local-config'));
}

define('DEVELOPMENT', $LOCAL_CONFIG['DEV_HOST']);
define('PRODUCTION', $LOCAL_CONFIG['DOMAIN_HOST']);
define('PRODUCTION_WWW', 'www.' . $LOCAL_CONFIG['DOMAIN_HOST']);
define('ROUTER', str_replace('.php', '', $_SERVER['PHP_SELF']));

/*
| NOTE: CONNECTION WITH DATABASE
*/
require_once ROOT . '/common/configurations/database.php';
