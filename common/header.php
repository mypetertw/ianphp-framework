<?
require_once __DIR__ . '/../root.php';
require_once ROOT . '/common/frontend.php';

if ($LOCAL_CONFIG['DB_HOST'] && $LOCAL_CONFIG['DB_USERNAME'] && $LOCAL_CONFIG['DB_PASSWORD'] && $LOCAL_CONFIG['DB_NAME']) {
    if (!TABLE_EXIST('user')) {
      exit ('USER TABLE NOT EXIST.');
    }

    if (!TABLE_EXIST('setting')) {
      exit ('SETTING TABLE NOT EXIST.');
    }

    if (!TABLE_EXIST('permission')) {
      exit ('PERMISSION TABLE NOT EXIST.');
    }
}

require_once ROOT . '/common/configurations/local-config/exist.php';

/*
| NOTE: BASIC HTML TAGS
*/
echo HTML_START . VIEWPORT . ROBOTS;

require_once ROOT . '/common/providers/Css.php';

/*
| NOTE: CSS AUTOLOAD
*/
foreach (glob(ROOT . '/common/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/'.basename($key));
}

foreach (glob(ROOT . '/common/css/basic/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/basic/'.basename($key));
}
