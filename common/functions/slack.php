<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
function SEND_MESSAGE($STRING, $HANDLER, $FILE, $CHANNEL) {
    GLOBAL $SYSTEM_VARIABLE;

    $payload = [
        'text' => $STRING,
        'channel' => '#' . $CHANNEL,
        'username' => 'DEBUG',
        'attachments' => [
            [
                "title" => "Error Message",
                "text" => $STRING
            ],
            [
                "title" => "Handler",
                "text" => $HANDLER
            ],
            [
                "title" => "File",
                "text" => $FILE
            ],
            [
                "title" => "HOST",
                "text" => $SYSTEM_VARIABLE['HOST_URL']
            ]
        ]
    ];
  $ch = curl_init($SYSTEM_VARIABLE['SLACK_API']);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  $res = curl_exec($ch);
  curl_close($ch);
}
