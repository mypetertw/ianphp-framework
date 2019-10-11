/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('#signin').submit(function(e) {
    e.preventDefault();
    handler = $(this).attr('id');
    formData = new FormData($(this)[0]);
    redirect = e.currentTarget.dataset.redirect;

    SUCCESS = function (data) {
        return location.href = '/admin/index';
    };

    FAILED = function (data) {
        return NOTIFY_FAILED(data.message, 3000);
    };

    ADMIN_FORMDATA_HANDLER(handler, handler, SUCCESS, FAILED, redirect);
});
