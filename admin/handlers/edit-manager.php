<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
$PDO->query(
    "UPDATE `user` SET
    `permission_id` = '{$_POST['permission_id']}'
    WHERE `id` = '{$_POST['id']}' "
);

/**
 * @return code 200
 */
exit (Server\Response::SUCCESS());
