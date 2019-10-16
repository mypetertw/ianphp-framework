<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/*
| NOTE: START WORKING
*/
$PDO->query(
    "UPDATE `permission` SET
    `user` = 0,
    `manager` = 0,
    `setting` = 0 "
);

foreach ($_POST['user'] as $key => $value) {
    $PDO->query(
        "UPDATE `permission` SET `user` = '{$value}'
        WHERE `permission_id` = '{$key}' "
    );
}

foreach ($_POST['manager'] as $key => $value) {
    $PDO->query(
        "UPDATE `permission` SET `manager` = '{$value}'
        WHERE `permission_id` = '{$key}' "
    );
}

foreach ($_POST['setting'] as $key => $value) {
    $PDO->query(
        "UPDATE `permission` SET `setting` = '{$value}'
        WHERE `permission_id` = '{$key}' "
    );
}

/*
| NOTE: SUCCESS RESPONSE 200
*/
exit (Server\Response::SUCCESS());
