<?
/*
| NOTE: USE "$LIMIT = $PAGINATION ? "LIMIT $PAGE_OFFSET, $PAGE_AMOUNT" : '';" IN MODEL
*/
$PAGE_AMOUNT = 10;
$PAGE = $_GET['page'] == '' ? 1 : $_GET['page'];
$PAGE_OFFSET = ($PAGE - 1) * $PAGE_AMOUNT;
