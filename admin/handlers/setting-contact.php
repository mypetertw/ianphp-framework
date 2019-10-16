<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/*
| NOTE: START WORKING
*/
try {
    $PDO->beginTransaction();

    $stmt = $PDO->prepare(
        "UPDATE `setting` SET
        `data_1` = :data_1,
        `data_2` = :data_2,
        `data_3` = :data_3,
        `data_4` = :data_4
        WHERE `setting_type` = 'contact' "
    );
    $stmt->execute([
        'data_1' => $_POST['line_link'],
        'data_2' => $_POST['facebook_link'],
        'data_3' => $_POST['email'],
        'data_4' => $_POST['phone']
    ]);

    $PDO->commit();

} catch (Exception $e) {
    $PDO->rollBack();
    exit (Server\Response::FAILED($e->getMessage(), true, HANDLER, NOW_SELF, 'error-msg'));
}

/*
| NOTE: SUCCESS RESPONSE 200
*/
exit (Server\Response::SUCCESS());
