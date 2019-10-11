<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
| REDIRECT WITH CONDITION (CHECK IDENTITY OR SOMETHING)
*/
if (ROUTER != '/admin/templates/signin' && !$_SESSION['admin-id']) {
    exit (Server\Redirect::LOCATION('/admin/signout'));
}

if (ROUTER == '/admin/templates/signin' && $_SESSION['admin-id']) {
    exit (Server\Redirect::LOCATION('/admin/index'));
}
