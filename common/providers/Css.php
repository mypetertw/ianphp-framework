<?
/**
 * YOUR CUSTOM CSS HERE
 */
$CUSTOM_CSS = [
    'vendor/swiper-4.5.0/dist/css/swiper.css',
    'vendor/fancybox-2.1.7/source/jquery.fancybox.css',
];

foreach ($CUSTOM_CSS as $key) {
    echo Helper\Css::REQUIRE($key);
}
