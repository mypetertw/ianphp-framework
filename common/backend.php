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
require_once ROOT . '/common/providers/Ip.php';
require_once ROOT . '/common/providers/Field.php';

/*
| NOTE: AUTOLOAD
*/
foreach (glob(ROOT . '/common/functions/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/classes/*.php') as $key) {
    require_once $key;
}

/*
| NOTE: MKDIR
*/
require_once ROOT . '/common/providers/Mkdir.php';

/*
| NOTE: HANDLER VERIFICATION
*/
require_once ROOT . '/common/providers/HandlerVerification.php';
