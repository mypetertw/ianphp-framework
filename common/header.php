<?
require_once __DIR__ . '/../root.php';
require_once ROOT . '/common/frontend.php';

/**
 * CHECK TABLE EXIST
 */
if ($DATABASE_ENABLE && !TABLE_EXIST('user')) {
    exit ('SOMETHING WENT WRONG: USER TABLE NOT EXIST.');
}

if ($DATABASE_ENABLE && !TABLE_EXIST('setting')) {
    exit ('SOMETHING WENT WRONG: SETTING TABLE NOT EXIST.');
}

if ($DATABASE_ENABLE && !TABLE_EXIST('permission')) {
    exit ('SOMETHING WENT WRONG: PERMISSION TABLE NOT EXIST.');
}

/**
 * CHECK LOCAL CONFIG EXIST
 */
require_once ROOT . '/common/configurations/env/exist.php';

/**
 * HTML TAG
 */
echo HTML_START . ROBOTS;

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
