<?
/**
 * META INFORMATION DEFAULT
 */
$META_KEYWORDS = $SETTING_META['data_5'];
$META_DESCRIPTION = $SETTING_META['data_6'];
$META_IMAGE = $SETTING_META['data_4'];

/**
 * CUSTOM META BY ROUTER
 *
 * @example ROUTER LIKE: /templates/index
 */
switch (ROUTER) {

    case 'xxx':
        $META_TITLE = '';
        $META_KEYWORDS = '';
        $META_DESCRIPTION = '';
        $META_IMAGE = '';
        break;
}
