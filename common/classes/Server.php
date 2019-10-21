<?
namespace Server;

class Redirect {

    public function LOCATION($URL) {
        return header('location:' . $URL);
    }
}

class Response {

    public function SUCCESS_BRING_DATA($BRING_DATA) {
        $json = [
            'code' => 200
        ];
        http_response_code(200);
        return json_encode(array_merge($json, $BRING_DATA), true);
    }

    public function SUCCESS() {
        $json = [
            'code' => 200
        ];
        http_response_code(200);
        return json_encode($json, true);
    }

    public function FAILED($STRING, $SEND = false, $HANDLER = '', $NOW_SELF = '', $CHANNEL = '') {
        if ($SEND) {
            SEND_MESSAGE($STRING, $HANDLER, $NOW_SELF, $CHANNEL);
        }
        $json = [
            'message' => $STRING
        ];
        http_response_code(400);
        return json_encode($json, true);
    }
}
