<?
require_once __DIR__ . '/../../common/functions/session.php';

SIGNOUT_ADMIN();

header('location: /admin/signin');
