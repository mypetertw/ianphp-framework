<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
try {
    $PDO->beginTransaction();

    if ($_FILES['data_2']['name']) {
        $data_2 = Image\Upload::GENERAL('data_2', 'logo', 'images/setting/icon/');
        if (!$data_2) {
            exit (Helper\Slack::SEND_MESSAGE('$data_2 照片上傳失敗。', HANDLER, NOW_SELF, 'error-msg'));
        }

        $stmt = $PDO->prepare(
            "UPDATE `setting` SET
            `data_2` = :data_2,
            `edit_time` = $TIME_NOW
            WHERE `setting_type` = 'website' "
        );
        $stmt->execute([
            'data_2' => $data_2
        ]);
    }

    if ($_FILES['data_3']['name']) {
        $data_3 = Image\Upload::GENERAL('data_3', 'meta', 'images/setting/icon/');
        if (!$data_3) {
            exit (Helper\Slack::SEND_MESSAGE('$data_3 照片上傳失敗。', HANDLER, NOW_SELF, 'error-msg'));
        }

        $stmt = $PDO->prepare(
            "UPDATE `setting` SET
            `data_3` = :data_3,
            `edit_time` = $TIME_NOW
            WHERE `setting_type` = 'meta' "
        );
        $stmt->execute([
            'data_3' => $data_3
        ]);
    }

    if ($_FILES['data_4']['name']) {
        $data_4 = Image\Upload::GENERAL('data_4', 'preview', 'images/setting/icon/');
        if (!$data_4) {
            exit (Helper\Slack::SEND_MESSAGE('$data_4 照片上傳失敗。', HANDLER, NOW_SELF, 'error-msg'));
        }

        $stmt = $PDO->prepare(
            "UPDATE `setting` SET
            `data_4` = :data_4,
            `edit_time` = $TIME_NOW
            WHERE `setting_type` = 'meta' "
        );
        $stmt->execute([
            'data_4' => $data_4
        ]);
    }

    $PDO->commit();

} catch (Exception $e) {
    $PDO->rollBack();
    exit (Server\Response::FAILED($e->getMessage(), true, HANDLER, NOW_SELF, 'error-msg'));
}

/**
 * @return code 200
 */
exit (Server\Response::SUCCESS());
