<?php
require_once __DIR__ . '/../../root.php';

/**
 * GET local-config.json INFORMATION
 * IF NO INFORMATION, REDIRECT TO local-config.json SETTING
 */
if (file_exists(ROOT . '/local-config.json')) {
    $LOCAL_CONFIG = json_decode(file_get_contents(ROOT . '/local-config.json'), true);
} else {
    exit (header('location: /common/configurations/local-config/setting'));
}

/**
 * GET DATABASE INFORMATION
 *
 * @return Boolean
 */
if ($LOCAL_CONFIG['DB_HOST'] && $LOCAL_CONFIG['DB_USERNAME'] && $LOCAL_CONFIG['DB_PASSWORD'] && $LOCAL_CONFIG['DB_NAME']) {
    $DATABASE_ENABLE = true;
}

/**
 * DEFINE SERVER VALUES
 */
define('DEVELOPMENT', $LOCAL_CONFIG['DEV_HOST']);
define('PRODUCTION', $LOCAL_CONFIG['PROD_HOST']);
define('PRODUCTION_WWW', 'www.' . $LOCAL_CONFIG['PROD_HOST']);
define('ROUTER', str_replace('.php', '', $_SERVER['PHP_SELF']));

require_once ROOT . '/common/configurations/database.php';
require_once ROOT . '/common/configurations/server.php';
require_once ROOT . '/common/configurations/env.php';

foreach (glob(ROOT . '/common/functions/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/classes/*.php') as $key) {
    require_once $key;
}
