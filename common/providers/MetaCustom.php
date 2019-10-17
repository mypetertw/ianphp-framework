<?
/**
 * CUSTOM META TAGS
 */
$META = [
    '<meta property="og:url" content="' . $SYSTEM_VARIABLE['HOST_URL_NO_SLASH'] . NOW_URI . '" />',
    '<meta property="og:title" content="' . $META_TITLE . ($META_TITLE ? '・' : '') . $SETTING_WEBSITE['data_1'] . '" />',
    '<meta property="og:site_name" content="' . $META_TITLE . ($META_TITLE ? '・' : '') . $SETTING_WEBSITE['data_1'] . '" />',
    '<meta name="keywords" content="' . $META_KEYWORDS . ',' . $SETTING_WEBSITE['data_1'] . '" />',
    '<meta name="description" content="' . $META_DESCRIPTION . '" />',
    '<meta property="og:description" content="' . $META_DESCRIPTION . '" />',
    '<meta property="og:image" content="' . $META_IMAGE . '" />',
];

foreach ($META as $key) {
    echo $key;
}
