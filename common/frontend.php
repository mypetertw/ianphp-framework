<?
require_once ROOT . '/common/configurations/local.php';

require_once ROOT . '/common/providers/Cache.php';
require_once ROOT . '/common/providers/LocalConfig.php';
require_once ROOT . '/common/providers/Layout.php';
require_once ROOT . '/common/providers/Ip.php';

foreach (glob(ROOT . '/common/models/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/common/listeners/*.php') as $key) {
    require_once $key;
}

require_once ROOT . '/common/providers/Helper.php';
require_once ROOT . '/common/providers/SettingModel.php';
require_once ROOT . '/common/providers/Pagination.php';
