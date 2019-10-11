<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| CUSTOM LOAD
*/
$CUSTOM_CSS = [
    'vendor/swiper-4.5.0/dist/css/swiper.css',
];
foreach ($CUSTOM_CSS as $key) {
    echo Helper\Css::REQUIRE($key);
}

/*
| NOTE: CSS AUTOLOAD
*/
foreach (glob(ROOT . '/common/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/'.basename($key));
}

foreach (glob(ROOT . '/common/css/display/*.*') as $key) {
    echo Helper\Css::REQUIRE('common/css/display/'.basename($key));
}
