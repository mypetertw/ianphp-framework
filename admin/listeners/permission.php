<?
/*
| NOTE: CUSTOM PERMISSION (WITH DATABASE)
*/
$PERMISSION_FIELD = [
    'manager',
    'user',
    'setting',
];

foreach ($PERMISSION_FIELD as $key) {
    if (preg_match("/" . $key . "/i", ROUTER) === 1 && $Admin['' . $key . ''] === 0) {
        exit (Server\Redirect::LOCATION('/admin/index?handler=no-permission'));
    }
}
