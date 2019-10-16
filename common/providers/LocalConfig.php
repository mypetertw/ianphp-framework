<?
if (preg_match("/admin/i", ROUTER) === 1 && !$LOCAL_CONFIG['DB_HOST'] && !$LOCAL_CONFIG['DB_USERNAME'] && !$LOCAL_CONFIG['DB_PASSWORD'] && !$LOCAL_CONFIG['DB_NAME']) {
    exit ('YOU CANT ACCESS /admin: NO DATABASE INFORMATION');
}
