<?
/**
 * CREATE env.json
 */
require_once __DIR__ . '/../../root.php';

$CREATE = fopen(ROOT . '/env.json', 'w');
$JSON = [
    'DB_HOST' => $_POST['DB_HOST'],
    'DB_USERNAME' => $_POST['DB_USERNAME'],
    'DB_PASSWORD' => $_POST['DB_PASSWORD'],
    'DB_NAME' => $_POST['DB_NAME'],
    'DEV_HOST' => $_POST['DEV_HOST'],
    'PROD_HOST' => $_POST['PROD_HOST'],
    'SLACK_WEBHOOK' => $_POST['SLACK_WEBHOOK']
];
fwrite($CREATE, json_encode($JSON));
fclose($CREATE);

$LOCAL_CONFIG = json_decode(file_get_contents(ROOT . '/env.json'), true);
require_once ROOT . '/common/env/setup.php';

header('location: /');
