<?
require_once __DIR__ . '/../../root.php';
require_once ROOT . '/common/backend.php';

/**
 * START CODING
 */
if (!$_GET['search_query']) {
    exit (Server\Response::FAILED('請輸入欲搜尋關鍵字。'));
}

$_SESSION['search_query'] = $_GET['search_query'];

/**
 * @return code 200
 */
exit (Server\Response::SUCCESS());
