<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| CUSTOM LOAD
*/
$CUSTOM_JS = [
    'common/js/jquery-3.4.1.min.js',
    'common/js/jquery-ui-1.12.1.min.js',
    'common/js/hashtag.min.js',
    'vendor/swiper-4.5.0/dist/js/swiper.min.js',
    'vendor/clipboard.js-master/dist/clipboard.min.js',
    // 'vendor/Croppie-master/croppie.min.js',
];
foreach ($CUSTOM_JS as $key) {
    echo Helper\Js::REQUIRE($key);
}

/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| JS AUTOLOAD
*/
require_once ROOT . '/common/configurations/const.php';

foreach (glob(ROOT . '/common/js/*.js') as $key) {
    if (preg_match("/jquery/i", $key) == 0 && preg_match("/hashtag/i", $key) == 0) {
        echo Helper\Js::REQUIRE('common/js/'.basename($key));
    }
}
