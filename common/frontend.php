<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once ROOT . '/common/configurations/local.php';
require_once ROOT . '/common/configurations/server.php';
require_once ROOT . '/common/configurations/env.php';
require_once ROOT . '/common/configurations/cache.php';

/*
| NOTE: CUSTOM
*/
require_once ROOT . '/common/providers/Layout.php';
require_once ROOT . '/common/providers/Ip.php';

/*
| NOTE: AUTOLOAD
*/
foreach (glob(ROOT . '/common/models/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/functions/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/classes/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/listeners/*.php') as $key) {
    require_once $key;
}

/*
| NOTE: ROBOTS
*/
define('ROBOTS', '<meta name="robots" content="' . ($SETTING_META['data_2'] ? 'index, follow' : 'noindex, nofollow' ) . '">');
?>
