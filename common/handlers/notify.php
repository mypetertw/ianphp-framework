<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/configurations/local.php';
require_once ROOT . '/common/configurations/server.php';
require_once ROOT . '/common/configurations/env.php';

foreach (glob(ROOT . '/common/classes/*.php') as $key) {
    require_once $key;
}

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

    // function ERROR_CATCH($errno, $errstr, $errfile, $errline) {
    //   switch ($errno) {
    //     case E_USER_WARNING: $errno = "USER_WARNING"; break;
    //     case E_USER_NOTICE: $errno = "USER_NOTICE"; break;
    //     case E_NOTICE: $errno = "NOTICE"; break;
    //     case E_WARNING: $errno = "WARNING"; break;
    //     case E_RECOVERABLE_ERROR: $errno = "RECOVERABLE_ERROR"; break;
    //     case E_ALL: $errno = "ALL"; break;
    //   }
    //
    //   $payload = array(
    //     "text" => $errstr,
    //     'channel' => '#error-msg',
    //     'username' => 'ERROR_CATCH',
    //     "attachments" => array(
    //       array(
    //         "title" => "Type",
    //         "text" => $errno
    //       ),
    //       array(
    //         "title" => "Reason",
    //         "text" => $errstr
    //       ),
    //       array(
    //         "title" => "Where",
    //         "text" => $errfile
    //       ),
    //       array(
    //         "title" => "Line",
    //         "text" => $errline
    //       )
    //     )
    //   );
    //   $ch = curl_init($SYSTEM_VARIABLE['SLACK_API']);
    //   curl_setopt($ch, CURLOPT_POST, 1);
    //   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    //   curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //   $res = curl_exec($ch);
    //   curl_close($ch);
    // }
    //
    // set_error_handler('ERROR_CATCH');
    // header('Access-Control-Allow-Origin: *');

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
        $ch = curl_init($SYSTEM_VARIABLE['SLACK_API']);
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
