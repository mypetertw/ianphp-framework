<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
try {
    $PDO->beginTransaction();

    $stmt = $PDO->prepare(
        "UPDATE `setting` SET
        `data_1` = :data_1,
        `data_2` = :data_2,
        `data_3` = :data_3
        WHERE `setting_type` = 'mail' "
    );
    $stmt->execute([
        'data_1' => $_POST['name'],
        'data_2' => $_POST['email'],
        'data_3' => $_POST['password']
    ]);

    $PDO->commit();

} catch (Exception $e) {
    $PDO->rollBack();
    exit (Server\Response::FAILED($e->getMessage(), true, HANDLER, NOW_SELF, 'error-msg'));
}

/**
 * @return code 200
 */
exit (Server\Response::SUCCESS());
