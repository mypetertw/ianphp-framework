<?
foreach (glob(ROOT . '/public/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/js/'.basename($key));
}

foreach (glob(ROOT . '/public/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/handlers/'.basename($key));
}

require_once ROOT . '/public/views/footer.php';

/**
 * @return BODY HTML TAGS
 */
echo BODY_END;
