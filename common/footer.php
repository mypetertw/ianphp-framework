<?
/**
 * SYSTEM BASIC LAYOUT
 */
require_once ROOT . '/common/providers/BasicLayout.php';

/**
 * CUSTOM JS
 */
require_once ROOT . '/common/providers/Js.php';

/**
 * COMMON CONST
 */
require_once ROOT . '/common/providers/Const.php';

/**
 * COMMON JS
 */
foreach (glob(ROOT . '/common/js/*.js') as $key) {
    if (
        preg_match("/jquery/i", $key) === 0 &&
        preg_match("/hashtag/i", $key) === 0
    ) {
        echo Helper\Js::REQUIRE('common/js/'.basename($key));
    }
}
