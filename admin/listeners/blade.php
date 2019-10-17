<?
/**
 * AUTO FIND ALL BLADES
 *
 * "user.index" MEANS "user/index.php" IN /admin/templates
 * @example USE "require_once BLADE;" IN templates TO GET BLADE
 * @return define
 */
foreach (array_diff(scandir(ROOT . '/admin/blade/'), array('.', '..')) as $key) {
    $GET_ROUTER = explode('.', str_replace('.php', '', $key));

    if (ROUTER == '/admin/templates/' . $GET_ROUTER[0] . '/' . $GET_ROUTER[1]) {
        define('BLADE', ROOT . '/admin/blade/' . $key);
    }
}
