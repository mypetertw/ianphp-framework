<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| CACHE FOR CSS AND JS
*/
switch (HOST) {

    case DEVELOPMENT:

        $SYSTEM_CACHE = [
            'CACHE' => '?v='.substr(time(), -6)
        ];
        break;

    case PRODUCTION:
    case PRODUCTION_WWW:

        $stmt = $PDO->prepare(
            "SELECT `setting` FROM `data` WHERE `setting_type` = :setting_type "
        );
        $stmt->execute([
            'setting_type' => 'cache'
        ]);
        $response = $stmt->fetch();

        $SYSTEM_CACHE = [
            'CACHE' => '?v='.$response['data_1']
        ];
        break;
}
