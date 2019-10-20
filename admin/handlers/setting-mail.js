/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('#setting-mail').submit(function(e) {
    e.preventDefault();
    handler = $(this).attr('id');
    formData = new FormData($(this)[0]);

    SUCCESS = function (data) {
        NOTIFY_SUCCESS('已保存。', 2000);
        return location.reload();
    };

    FAILED = function (data) {
        return NOTIFY_FAILED(data.message, 3000);
    };

    ADMIN_FORMDATA_HANDLER(handler, handler, SUCCESS, FAILED);
});
