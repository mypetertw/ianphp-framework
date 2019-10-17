<?
require_once __DIR__ . '/../root.php';
require_once ROOT . '/common/frontend.php';

/**
 * CHECK TABLE EXIST
 */
if ($LOCAL_CONFIG['DB_HOST'] && $LOCAL_CONFIG['DB_USERNAME'] && $LOCAL_CONFIG['DB_PASSWORD'] && $LOCAL_CONFIG['DB_NAME']) {
    if (!TABLE_EXIST('user')) {
      exit ('SOMETHING WENT WRONG: USER TABLE NOT EXIST.');
    }

    if (!TABLE_EXIST('setting')) {
      exit ('SOMETHING WENT WRONG: SETTING TABLE NOT EXIST.');
    }

    if (!TABLE_EXIST('permission')) {
      exit ('SOMETHING WENT WRONG: PERMISSION TABLE NOT EXIST.');
    }
}

/**
 * CHECK LOCAL CONFIG EXIST
 */
require_once ROOT . '/common/configurations/local-config/exist.php';

/**
 * BASIC HTML TAG
 */
echo HTML_START . VIEWPORT . ROBOTS;

/**
 * CUSTOM CSS
 */
require_once ROOT . '/common/providers/Css.php';

/**
 * COMMON CSS
 */
foreach (glob(ROOT . '/common/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/'.basename($key));
}

foreach (glob(ROOT . '/common/css/basic/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/basic/'.basename($key));
}
