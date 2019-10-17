<?
foreach (glob(ROOT . '/admin/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/js/'.basename($key));
}

foreach (glob(ROOT . '/admin/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/handlers/'.basename($key));
}

require_once ROOT . '/admin/views/footer.php';

/**
 * @return BODY HTML TAGS
 */
echo BODY_END;
