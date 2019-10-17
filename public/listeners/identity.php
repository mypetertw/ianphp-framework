<?
if (ROUTER == '/templates/signin' && $_SESSION['user-id']) {
    exit (Server\Redirect::LOCATION('/'));
}
