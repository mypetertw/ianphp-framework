<?
/*
| NOTE: COMMON META INFORMATION
*/
$COMMON_META = [
    '<meta property="og:locale" content="' . $SETTING_META['data_1'] . '" />',
    '<meta property="og:type" content="website" />',
    '<link rel="shortcut icon" href="' . $SETTING_META['data_3'] . '" />',
    '<link rel="icon" type="image/png" href="' . $SETTING_META['data_3'] . '" />',
    '<link rel="apple-touch-icon-precomposed" href="' . $SETTING_META['data_3'] . '" />',
    '<link rel="apple-touch-icon" href="' . $SETTING_META['data_3'] . '" />',
];

foreach ($COMMON_META as $key) {
    echo $key;
}
