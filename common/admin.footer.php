<?
/**
 * ADMIN JS
 */
foreach (glob(ROOT . '/admin/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/js/'.basename($key));
}

/**
 * ADMIN HANDLER JS
 */
foreach (glob(ROOT . '/admin/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('admin/handlers/'.basename($key));
}

/**
 * ADMIN FOOTER
 */
require_once ROOT . '/admin/views/footer.php';

/**
 * BODY HTML TAGS
 */
echo BODY_END;
