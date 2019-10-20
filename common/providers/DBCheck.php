<?
/**
 * CHECK IF env.json IS NO VALUES FOR DATABASE
 * ACCESS /admin
 */
if (preg_match("/admin/i", ROUTER) === 1 && !$DATABASE_ENABLE) {
    exit ('YOU CANT ACCESS /admin: NO DATABASE INFORMATION');
}
