<?
require_once ROOT . '/common/configurations/local.php';
require_once ROOT . '/common/providers/Cache.php';
require_once ROOT . '/common/providers/DBCheck.php';
require_once ROOT . '/common/providers/CustomLayout.php';

/**
 * COMMON MODEL
 */
foreach (glob(ROOT . '/common/models/*.php') as $key) {
    require_once $key;
}

/**
 * COMMON LISTENER
 */
foreach (glob(ROOT . '/common/listeners/*.php') as $key) {
    require_once $key;
}

require_once ROOT . '/common/providers/Helper.php';
require_once ROOT . '/common/providers/DefaultSetting.php';
require_once ROOT . '/common/providers/Pagination.php';
