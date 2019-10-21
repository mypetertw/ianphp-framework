<?
namespace HttpRequest;

// class TapPay {
//
//   public function BOOKING($JSON) {
//     GLOBAL $API_TAPPAY, $SETTING_TAPPAY, $HTTP_CODE;
//
//     $ch = curl_init($API_TAPPAY);
//     curl_setopt($ch, CURLOPT_POST, 1);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
//     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($JSON));
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_HTTPHEADER,
//     [
//       'Content-Type: application/json',
//       'x-api-key: '.$SETTING_TAPPAY['data_1'] ? 'partner_fQmz7P3v2ibkTVj4UnevN4WG1uSC6BFI9J2Q6BKWyilVapp3S5uM7ENo' : $SETTING_TAPPAY['data_5'].'',
//       'Content-Length: ' . strlen(json_encode($JSON))
//     ]);
//     $RES = curl_exec($ch);
//     $HTTP_CODE = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     curl_close($ch);
//
//     return json_decode($RES, true);
//   }
// }
