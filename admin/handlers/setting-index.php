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
        `data_3` = :data_3
        WHERE `setting_type` = 'website' "
    );
    $stmt->execute([
        'data_1' => $_POST['name'],
        'data_3' => $_POST['close']
    ]);

    $stmt = $PDO->prepare(
        "UPDATE `setting` SET
        `data_5` = :data_5,
        `data_6` = :data_6,
        `data_2` = :data_2
        WHERE `setting_type` = 'meta' "
    );
    $stmt->execute([
        'data_5' => $_POST['tags'],
        'data_6' => $_POST['description'],
        'data_2' => $_POST['robots']
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
