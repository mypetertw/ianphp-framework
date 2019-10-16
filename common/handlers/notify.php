<?
/*
| NOTE: NOTIFY
*/
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/configurations/local.php';

switch (HANDLER) {

    case 'progress-bar-on-click':
        exit ($_POST['click']);
        break;

    case 'get-online-status-admin':

        $stmt = $PDO->prepare(
            "UPDATE `user` SET
            `online_status` = :online_status
            WHERE `id` = :target_id "
        );
        $stmt->execute([
            'online_status' => $TIME_NOW,
            'target_id' => $_SESSION['admin-id']
        ]);

        break;

    case 'get-online-status':

        $stmt = $PDO->prepare(
            "UPDATE `user` SET
            `online_status` = :online_status
            WHERE `id` = :target_id "
        );
        $stmt->execute([
            'online_status' => $TIME_NOW,
            'target_id' => $_SESSION['user-id']
        ]);

        break;

    case 'slack':

        $JSON = [
            'text' => $_POST['error_message'],
            'channel' => '#error-msg',
            'username' => 'ERROR_MESSAGE',
            'attachments' => [
                [
                    "title" => "Error Message",
                    "text" => $_POST['error_message']
                ],
                [
                    "title" => "responseText",
                    "text" => $_POST['string']
                ],
                [
                    "title" => "Handler",
                    "text" => $_POST['handler']
                ],
                [
                    "title" => "File",
                    "text" => $_POST['file']
                ],
                [
                    "title" => "HOST",
                    "text" => $_POST['host']
                ]
            ]
        ];
        $ch = curl_init($LOCAL_CONFIG['SLACK_WEBHOOK']);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($JSON));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $res = curl_exec($ch);
        curl_close($ch);
        break;

    default:
        exit (Server\Response::FAILED('BAD_HANDLER', true, HANDLER, NOW_SELF, 'error-msg'));
        break;
}
