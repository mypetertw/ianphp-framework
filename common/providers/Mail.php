<?
/**
 * MAILSEND
 */
if ($SETTING_MAIL['data_1'] && $SETTING_MAIL['data_2'] && $SETTING_MAIL['data_3']) {
    require_once ROOT . '/vendor/phpmailer/class.phpmailer.php';

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 465;
    $mail->CharSet = 'utf-8';
    $mail->Username = $SETTING_MAIL['data_2'];
    $mail->Password = $SETTING_MAIL['data_3'];
    $mail->From = $SETTING_MAIL['data_2'];
    $mail->IsHTML(true);
    $mail->FromName = $SETTING_MAIL['data_1'];
    $mail->ClearAllRecipients();

    $mail->Subject = $MAIL_SUBJECT;
    $mail->Body = $MAIL_BODY;

    $mail->AddBCC($MAIL_TARGET);
    if (!$mail->Send()) {
        exit (Server\Response::FAILED($mail->ErrorInfo, true, HANDLER, NOW_SELF, 'error-msg'));
    }
}
