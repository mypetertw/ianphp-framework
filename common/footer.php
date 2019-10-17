<?
/**
 * SYSTEM BASIC LAYOUT
 * @return Array
 */
$BASIC_LAYOUT = [
    '<div id="gotop">↑</div>',
    '<div class="display-none notification-message"></div>',
    '<div class="load"></div>',
    '<div class="progress"></div>',
    '<div class="display-none page-loading-layout page-loading-layout-evt"><div class="page-loading-icon translate-middle"><img src="/images/loading.svg"></div></div>',
];

foreach ($BASIC_LAYOUT as $key) {
    echo $key;
}

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
