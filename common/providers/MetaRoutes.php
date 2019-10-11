<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| META INFORMATION DEFAULT
*/
$META_KEYWORDS = $SETTING_META['data_5'];
$META_DESCRIPTION = $SETTING_META['data_6'];
$META_IMAGE = $SETTING_META['data_4'];

/*
| NOTE: CUSTOM META BY ROUTER
| LIKE: /templates/index
*/
switch (ROUTER) {
    
    case 'xxx':
        $META_TITLE = '';
        $META_KEYWORDS = '';
        $META_DESCRIPTION = '';
        $META_IMAGE = '';
        break;
}
