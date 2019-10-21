<?
require_once __DIR__ . '/../root.php';
require_once ROOT . '/common/frontend.php';

/**
 * CHECK TABLE EXIST
 */
require_once ROOT . '/common/providers/TableExist.php';

/**
 * CHECK /env.json EXIST
 */
require_once ROOT . '/common/env/exist.php';

/**
 * HTML TAG
 */
echo HTML_START . $ROBOTS;

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
