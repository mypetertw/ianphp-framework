<?
/*
| NOTE: FIND /local-config.json EXIST
*/
if (!file_exists(ROOT . '/local-config.json')) {
    exit (header('location: /common/configurations/local-config/setting'));
}
