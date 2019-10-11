<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/*
| NOTE: START WORKING
*/
$PDO->query(
    "UPDATE `user` SET
    `permission_id` = '{$_POST['permission_id']}'
    WHERE `id` = '{$_POST['id']}' "
);

/*
| NOTE: SUCCESS RESPONSE 200
*/
exit (Server\Response::SUCCESS());
