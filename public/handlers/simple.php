<?
require_once __DIR__ . '/../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
try {
    $PDO->beginTransaction();

    $stmt = $PDO->prepare(
        "UPDATE `setting` SET
        `data_1` = :data_1
        WHERE `setting_type` = 'website' "
    );
    $stmt->execute([
        'data_1' => $_POST['name']
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
