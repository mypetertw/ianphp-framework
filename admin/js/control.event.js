/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('.control-evt').mouseenter(function(e) {
    e.preventDefault();
    id = e.currentTarget.dataset.id;

    $('.control-evt-layout-' + id).show();
}).mouseleave(function(e) {
    $('.control-evt-layout-' + id).hide();
});
