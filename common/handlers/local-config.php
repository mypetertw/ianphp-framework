<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
require_once __DIR__ . '/../../root.php';

/*
| NOTE: CREATE local-config.json
*/
$CREATE = fopen(ROOT . '/local-config.json', 'w');
$JSON = [
    'APP_ID' => $_POST['APP_ID'],
    'APP_TOKEN' => $_POST['APP_TOKEN'],
    'DB_HOST' => $_POST['DB_HOST'],
    'DB_USERNAME' => $_POST['DB_USERNAME'],
    'DB_PASSWORD' => $_POST['DB_PASSWORD'],
    'DB_NAME' => $_POST['DB_NAME'],
    'DEV_HOST' => $_POST['DEV_HOST'],
    'DOMAIN_HOST' => $_POST['DOMAIN_HOST'],
    'BITBUCKET_NAME' => $_POST['BITBUCKET_NAME']
];
fwrite($CREATE, json_encode($JSON));
fclose($CREATE);
header('location: /admin/signin');
