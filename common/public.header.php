<?
/**
 * PUBLIC MODEL
 */
foreach (glob(ROOT . '/public/models/*.php') as $key) {
    require_once $key;
}

/**
 * CHECK user-id
 */
if ($_SESSION['user-id']) {
    $User = User\Get::INFORMATION();
}

/**
 * PUBLIC LISTENER
 */
foreach (glob(ROOT . '/public/listeners/*.php') as $key) {
    require_once $key;
}

/**
 * CSS
 */
foreach (glob(ROOT . '/public/css/*.*') as $key) {
    echo Helper\Css::REQUIRE('public/css/'.basename($key));
}

require_once ROOT . '/common/providers/Meta.php';
require_once ROOT . '/common/providers/MetaRoutes.php';
require_once ROOT . '/common/providers/MetaCustom.php';
require_once ROOT . '/common/providers/Analytics.php';

/**
 * TITLE
 */
echo '<title>' . $META_TITLE . ($META_TITLE ? '・' : '') . $SETTING_WEBSITE['data_1'] . '</title>';

/**
 * BODY START TAGS
 */
echo BODY_START;

require_once ROOT . '/common/providers/CloseSite.php';
require_once ROOT . '/common/providers/SocialContact.php';
require_once ROOT . '/common/providers/Loading.php';
require_once ROOT . '/public/views/header.php';
