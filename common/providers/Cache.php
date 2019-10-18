<?
/**
 * CACHE FOR CSS & JS
 */
switch (HOST) {

    case DEVELOPMENT:

        $SYSTEM_CACHE = [
            'CACHE' => '?v='.substr(time(), -6)
        ];
        break;

    case PRODUCTION:
    case PRODUCTION_WWW:

        if ($DATABASE_ENABLE) {

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
                'CACHE' => ''
            ];

        }
        break;
}
