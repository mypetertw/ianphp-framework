<?
if (!isset($_SESSION)) {
    session_start();
}

function SIGNOUT_ADMIN() {

    unset($_SESSION['admin-id']);
    unset($_SESSION['admin-session']);
}

function SIGNOUT_USER() {

    unset($_SESSION['user-id']);
    unset($_SESSION['user-session']);
}
