<?php
require_once __DIR__ . '/root.php';
$LOCAL_CONFIG = json_decode(file_get_contents(ROOT . '/local-config.json'), true);

$PDO = new mysqli($LOCAL_CONFIG['DB_HOST'], $LOCAL_CONFIG['DB_USERNAME'], $LOCAL_CONFIG['DB_PASSWORD'], $LOCAL_CONFIG['DB_NAME']);

if ($PDO->connect_error) {
  die("Error: " . $PDO->connect_error);
}

$PDO->query("SET NAMES utf8");
$PDO->set_charset("utf8mb4");

date_default_timezone_set('Asia/Taipei');

$PDO->query(
  "UPDATE `setting` SET
    `data_1` = '".time()."'
  WHERE `setting_type` = 'cache' "
);

echo '
--------------------------------------------------
Cache time just changed to '.date('Y-m-d H:i:s', time()).' ('.time().')
--------------------------------------------------
';

function execPrint($command) {
  $result = [];
  exec($command, $result);
  foreach ($result as $line) {
    print($line . "\n");
  }
}

print("" . execPrint("git pull https://boyicoco:12451245@bitbucket.org/boyicoco/".$LOCAL_CONFIG['BITBUCKET_NAME'].".git master") . "");
