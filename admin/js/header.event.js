/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('.header-admin-icon-menu-evt-btn').mouseenter(function() {
    $('.header-admin-icon-menu-evt, .close-admin-icon-menu').fadeIn('fast');
});
$('.header-admin-icon-menu-evt').mouseleave(function() {
    $('.header-admin-icon-menu-evt, .close-admin-icon-menu').fadeOut('fast');
});

$('.close-admin-icon-menu').mouseenter(function() {
    $('.close-admin-icon-menu, .header-admin-icon-menu-evt').fadeOut('fast');
});
