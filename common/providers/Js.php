<?
/*
| NOTE: CUSTOM LOAD
*/
$CUSTOM_JS = [
    'common/js/jquery-3.4.1.min.js',
    'common/js/jquery-ui-1.12.1.min.js',
    'common/js/hashtag.min.js',
    // 'vendor/swiper-4.5.0/dist/js/swiper.min.js',
    // 'vendor/clipboard.js-master/dist/clipboard.min.js',
    // 'vendor/Croppie-master/croppie.min.js',
    // 'vendor/fancybox-2.1.7/source/jquery.fancybox.pack.js',
];
foreach ($CUSTOM_JS as $key) {
    echo Helper\Js::REQUIRE($key);
}
