<?
foreach (glob(ROOT . '/admin/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/js/'.basename($key));
}

foreach (glob(ROOT . '/admin/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/handlers/'.basename($key));
}

/*
| NOTE: FOOTER
*/
require_once ROOT . '/admin/views/footer.php';

/*
| NOTE: ENDBODY TAG
*/
echo BODY_END;
