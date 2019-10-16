<?
foreach (glob(ROOT . '/admin/models/*.php') as $key) {
    require_once $key;
}

/*
| NOTE: ADMIN INFORMATION
*/
if ($_SESSION['admin-id']) {
    $Admin = Admin\Get::INFORMATION();
}

foreach (glob(ROOT . '/admin/listeners/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/admin/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('admin/css/'.basename($key));
}

/*
| NOTE: META INFORMATION
*/
require_once ROOT . '/common/providers/Meta.php';

/*
| NOTE: TITLE TAG
*/
echo '<title>Admin・' . $SETTING_WEBSITE['data_1'] . '</title>';

/*
| NOTE: BODY START TAG
*/
echo BODY_START;

/*
| NOTE: HEADER
*/
require_once ROOT . '/admin/views/header.php';
