<?
if (ROUTER != '/admin/templates/signin' && !$_SESSION['admin-id']) {
    exit (Server\Redirect::LOCATION('/admin/signout'));
}

if (ROUTER == '/admin/templates/signin' && $_SESSION['admin-id']) {
    exit (Server\Redirect::LOCATION('/admin/index'));
}
