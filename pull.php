<?php
require_once __DIR__ . '/root.php';
$LOCAL_CONFIG = json_decode(file_get_contents(ROOT . '/local-config.json'), true);

function execPrint($command) {
  $result = [];
  exec($command, $result);
  foreach ($result as $line) {
    print($line . "\n");
  }
}

print("" . execPrint("git pull https://boyicoco:12451245@bitbucket.org/boyicoco/".$LOCAL_CONFIG['BITBUCKET_NAME'].".git master") . "");
