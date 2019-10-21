<?
if (!file_exists(ROOT . '/env.json')) {
    exit (header('location: /common/env/setting'));
}
