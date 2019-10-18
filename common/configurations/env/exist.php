<?
/**
 * FIND /env.json EXIST
 */
if (!file_exists(ROOT . '/env.json')) {
    exit (header('location: /common/configurations/env/setting'));
}
