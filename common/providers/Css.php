<?
/*
| NOTE: CUSTOM LOAD
*/
$CUSTOM_CSS = [
    'vendor/swiper-4.5.0/dist/css/swiper.css',
];
foreach ($CUSTOM_CSS as $key) {
    echo Helper\Css::REQUIRE($key);
}
