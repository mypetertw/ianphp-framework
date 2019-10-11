<?
/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
if (ROUTER == '/templates/signin' && $_SESSION['user-id']) {
    exit (Server\Redirect::LOCATION('/'));
}
