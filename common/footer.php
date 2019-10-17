<?
foreach ($BASIC_LAYOUT as $key) {
    echo $key;
}

/**
 * LOAD CUSTOM JS
 */
require_once ROOT . '/common/providers/Js.php';

/**
 * AUTOLOAD COMMON JS
 */
require_once ROOT . '/common/providers/Const.php';

foreach (glob(ROOT . '/common/js/*.js') as $key) {
    if (
        preg_match("/jquery/i", $key) === 0 &&
        preg_match("/hashtag/i", $key) === 0
    ) {
        echo Helper\Js::REQUIRE('common/js/'.basename($key));
    }
}
