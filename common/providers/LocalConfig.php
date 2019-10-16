<?
if (preg_match("/admin/i", ROUTER) === 1 && !$LOCAL_CONFIG['DB_HOST'] or !$LOCAL_CONFIG['DB_USERNAME'] or !$LOCAL_CONFIG['DB_PASSWORD'] or !$LOCAL_CONFIG['DB_NAME']) {
    exit ('YOU CANT ACCESS /admin: NO DATABASE INFORMATION');
}
