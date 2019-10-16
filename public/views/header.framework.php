<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
foreach (glob(ROOT . '/public/models/*.php') as $key) {
    require_once $key;
}

/*
| NOTE: USER INFORMATION
*/
if ($_SESSION['user-id']) {
    $User = User\Get::INFORMATION();
}

foreach (glob(ROOT . '/public/listeners/*.php') as $key) {
    require_once $key;
}

foreach (glob(ROOT . '/public/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('public/css/'.basename($key));
}

/*
| NOTE: META INFORMATION
*/
require_once ROOT . '/common/providers/Meta.php';
require_once ROOT . '/common/providers/MetaRoutes.php';
require_once ROOT . '/common/providers/MetaCustom.php';

/*
| NOTE: ANALYTICS
*/
require_once ROOT . '/common/providers/Analytics.php';

/*
| NOTE: TITLE TAG
*/
echo '<title>' . $META_TITLE . ($META_TITLE ? '・' : '') . $SETTING_WEBSITE['data_1'] . '</title>';

/*
| NOTE: BODY START TAG
*/
echo BODY_START;

/*
| NOTE: CLOSE SITE
*/
require_once ROOT . '/common/providers/CloseSite.php';

/*
| NOTE: SOCIAL CONTACT
*/
require_once ROOT . '/common/providers/SocialContact.php';

/*
| NOTE: LOADING EVENT
*/
require_once ROOT . '/common/providers/Loading.php';

/*
| NOTE: HEADER
*/
require_once ROOT . '/public/views/header.php';
