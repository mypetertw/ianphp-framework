<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
if (!file_exists(ROOT . '/local-config.json')) {
    exit (header('location: /admin/local-config'));
}
