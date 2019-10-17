<?
/**
 * ADMIN MODEL
 */
foreach (glob(ROOT . '/admin/models/*.php') as $key) {
    require_once $key;
}

/**
 * CHECK admin-id
 */
if ($_SESSION['admin-id']) {
    $Admin = Admin\Get::INFORMATION();
}

/**
 * ADMIN LISTENER
 */
foreach (glob(ROOT . '/admin/listeners/*.php') as $key) {
    require_once $key;
}

/**
 * CSS
 */
foreach (glob(ROOT . '/admin/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('admin/css/'.basename($key));
}

/**
 * META TAG
 */
require_once ROOT . '/common/providers/Meta.php';

/**
 * TITLE
 */
echo '<title>Admin・' . $SETTING_WEBSITE['data_1'] . '</title>';

/**
 * BODY START TAG
 */
echo BODY_START;


/**
 * HEADER
 */
require_once ROOT . '/admin/views/header.php';
