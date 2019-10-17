<?
foreach (glob(ROOT . '/admin/models/*.php') as $key) {
    require_once $key;
}

if ($_SESSION['admin-id']) {
    $Admin = Admin\Get::INFORMATION();
}

foreach (glob(ROOT . '/admin/listeners/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/admin/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('admin/css/'.basename($key));
}

/**
 * @return META TAGS
 */
require_once ROOT . '/common/providers/Meta.php';

/**
 * @return TITLE TAG
 */
echo '<title>Admin・' . $SETTING_WEBSITE['data_1'] . '</title>';

/**
 * @return BODY START TAGS
 */
echo BODY_START;

require_once ROOT . '/admin/views/header.php';
