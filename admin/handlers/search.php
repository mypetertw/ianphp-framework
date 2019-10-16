<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/*
| NOTE: START WORKING
*/
if (!$_GET['search_query']) {
    exit (Server\Response::FAILED('請輸入欲搜尋關鍵字。'));
}

$_SESSION['search_query'] = $_GET['search_query'];

/*
| NOTE: SUCCESS RESPONSE 200
*/
exit (Server\Response::SUCCESS());
