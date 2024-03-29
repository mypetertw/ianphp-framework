<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
$stmt = $PDO->prepare(
    "SELECT id, session FROM `user`
    WHERE `email` = :email
    AND `password` = :password
    AND `permission_id` > 1 "
);
$response = Queries\Select::FETCH($stmt, [
    'email' => $_POST['email'],
    'password' => $password
]);

if (!$response) {
    exit (Server\Response::FAILED('無訪問權限。'));
}

if ($response['block'] === 1) {
    exit (Server\Response::FAILED('登入遭到拒絕。'));
}

/**
 * MAILSEND
 */
if ($_POST['email'] != 'root@root') {
    $MAIL_SUBJECT = '你的驗證碼：';
    $MAIL_BODY = '這是你的驗證碼：';
    $MAIL_TARGET = $_POST['email'];
    require_once ROOT . '/common/providers/Mail.php';
}

$_SESSION['admin-id'] = $response['id'];
$_SESSION['admin-session'] = $response['session'];

/**
 * @return code 200
 */
exit (Server\Response::SUCCESS());
