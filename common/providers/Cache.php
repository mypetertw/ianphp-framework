<?
/*
| NOTE: CACHE FOR CSS AND JS
*/
switch (HOST) {

    case DEVELOPMENT:

        $SYSTEM_CACHE = [
            'CACHE' => '?v='.substr(time(), -6)
        ];
        break;

    case PRODUCTION:
    case PRODUCTION_WWW:

        if ($LOCAL_CONFIG['DB_HOST'] && $LOCAL_CONFIG['DB_USERNAME'] && $LOCAL_CONFIG['DB_PASSWORD'] && $LOCAL_CONFIG['DB_NAME']) {

            # DATABASE
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

        } else {

            # NO DATABASE
            $SYSTEM_CACHE = [
                'CACHE' => '?v='.substr(time(), -6)
            ];
            
        }
        break;
}
