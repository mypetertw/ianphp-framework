function PROGRESS_BAR_ON_CLICK() {

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
        data: {
            'click': 1
        },
        url: "/common/handlers/notify?handler=progress-bar-on-click",
        success: function(data) {
            data === 1 ? $('.progress').css('width', '100%') : '';
        },
        error: function(xhr, status, error) {
            $('.progress').css('width', '0px');
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, handler, HOST_URL);
        }
    });
}
