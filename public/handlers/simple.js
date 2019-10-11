$('#xxx').submit(function(e) {
    e.preventDefault();
    handler = $(this).attr('id');
    formData = new FormData($(this)[0]);
    redirect = e.currentTarget.dataset.redirect;

    SUCCESS = function (data) {
        return location.href = '/book/payment';
    };

    FAILED = function (data) {
        return NOTIFY_FAILED(data.message, 3000);
    };

    FORMDATA_HANDLER(handler, handler, SUCCESS, FAILED, redirect);
});
