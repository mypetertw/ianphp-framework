<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| JS AUTOLOAD
*/
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
| NOTE: ENDBODY TAG
*/
echo BODY_END;
