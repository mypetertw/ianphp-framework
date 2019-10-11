function ADMIN_HANDLER_CONTROL_POST(router, handler, data, SUCCESS, FAILED) {

    $.ajax({
        type: "POST",
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            xhr.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            return xhr;
        },
        timeout: TIMEOUT,
        url: "/admin/handlers/" + router + "?handler=" + handler,
        data: data,
        success: function(data) {
            var data = JSON.parse(data);

            if (data.code === 200) {
                SUCCESS();
            } else {
                FAILED();
                $('.progress').css('width', '0px');
                return NOTIFY_FAILED(data.message, 3000);
            }

        },
        error: function(xhr, status, error) {
            $('.progress').css('width', '0px');
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, handler, HOST_URL);
        }
    });
}

function HANDLER_CONTROL_POST(router, handler, data, SUCCESS, FAILED) {

    $.ajax({
        type: "POST",
        timeout: TIMEOUT,
        url: "/handlers/" + router + "?handler=" + handler,
        data: data,
        success: function(data) {
            var data = JSON.parse(data);

            if (data.code === 200) {
                SUCCESS(data);
            } else {
                FAILED();
                return NOTIFY_FAILED(data.message, 3000);
            }

        },
        error: function(xhr, status, error) {
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, handler, HOST_URL);
        }
    });
}

function ADMIN_FORMDATA_HANDLER(router, handler, SUCCESS, FAILED, redirect = '') {

    $.ajax({
        type: "POST",
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            xhr.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            return xhr;
        },
        url: "/admin/handlers/" + router + "?handler=" + handler,
        data: formData,
        enctype: "multipart/form-data",
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            var data = JSON.parse(data);

            if (data.code === 200) {
                if (redirect) {
                    return location.href = redirect;
                } else if (data.redirect) {
                    return location.href = data.redirect;
                } else {
                    SUCCESS(data);
                }
            } else {
                $('.progress').css('width', '0px');
                if (data.redirect) {
                    return location.href = data.redirect;
                } else {
                    FAILED(data);
                }
            }
        },
        error: function(xhr, status, error) {
            $('.progress').css('width', '0px');
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, handler, HOST_URL);
        }
    });
}

function FORMDATA_HANDLER(router, handler, SUCCESS, FAILED, redirect = '') {

    $.ajax({
        type: "POST",
        xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            xhr.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentComplete = evt.loaded / evt.total;
                    $('.progress').css({
                        width: percentComplete * 100 + '%'
                    });
                }
            }, false);
            return xhr;
        },
        timeout: TIMEOUT,
        url: "/handlers/" + router + "?handler=" + handler,
        data: formData,
        enctype: "multipart/form-data",
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            var data = JSON.parse(data);

            if (data.code === 200) {
                if (redirect) {
                    return location.href = redirect;
                } else if (data.redirect) {
                    return location.href = data.redirect;
                } else {
                    SUCCESS(data);
                }
            } else {
                $('.progress').css('width', '0px');
                if (data.redirect) {
                    return location.href = data.redirect;
                } else {
                    FAILED(data);
                }
            }
        },
        error: function(xhr, status, error) {
            $('.progress').css('width', '0px');
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, handler, HOST_URL);
        }
    });
}
