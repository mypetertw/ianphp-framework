<?
foreach (glob(ROOT . '/public/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/js/'.basename($key));
}

foreach (glob(ROOT . '/public/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/handlers/'.basename($key));
}

/*
| NOTE: FOOTER
*/
require_once ROOT . '/public/views/footer.php';

/*
| NOTE: END BODY TAG
*/
echo BODY_END;
