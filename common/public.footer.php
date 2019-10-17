<?
/**
 * PUBLIC JS
 */
foreach (glob(ROOT . '/public/js/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/js/'.basename($key));
}

/**
 * PUBLIC HANDLER JS
 */
foreach (glob(ROOT . '/public/handlers/*.js') as $key) {
    echo Helper\Js::REQUIRE('public/handlers/'.basename($key));
}

/**
 * PUBLIC FOOTER
 */
require_once ROOT . '/public/views/footer.php';

/**
 * BODY HTML TAG
 */
echo BODY_END;
