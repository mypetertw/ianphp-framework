<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| CUSTOM AUTOCREATE START WITH images/
*/
$MKDIR = [
    'images/setting',
    'images/setting/icon',
];

foreach ($MKDIR as $key) {
    $DIR = ROOT . '/' . $key;

    if (!file_exists($DIR)) {
        $OLDMASK = umask(0);
        if (!mkdir($DIR, 0777)) {
            exit (Helper\Slack::SEND_MESSAGE('請將根目錄 images/ 權限設為 0777', 'mkdir', NOW_SELF));
        }
        umask($OLDMASK);
    }
}
