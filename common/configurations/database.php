<?php
/**
 * CONNECTION TO DATABASE
 * @param PDO
 * @return PDO
 */
if ($DATABASE_ENABLE) {

    try {
        $PDO = new PDO(
            'mysql:host=' . $LOCAL_CONFIG['DB_HOST'] . '; dbname=' . $LOCAL_CONFIG['DB_NAME'] . '; charset=utf8mb4',
            $LOCAL_CONFIG['DB_USERNAME'],
            $LOCAL_CONFIG['DB_PASSWORD']
        );
        $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $PDO->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        date_default_timezone_set('Asia/Taipei');

    } catch (PDOException $e) {
        exit ('SOMETHING WENT WRONG:' . $e->getMessage());
    }

}
