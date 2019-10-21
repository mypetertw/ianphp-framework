function INPUT_AUTO_HEIGHT(target, keyup, maxlength) {
    target.innerHeight(target.get(0).scrollHeight);
    target.on('input', function() {
        $(this).height('auto');
        $(this).innerHeight($(this)[0].scrollHeight);
    });
}

function INPUT_LIMIT(target, keyup, maxlength) {
    $('.' + keyup).text(target.val().length);
    $('.' + maxlength).text(target.attr('maxlength'));
    target.keyup(function() {
        var len = $(this).val().length;
        $('.' + keyup).text(len);
    });
}

function NUMBER_ONLY(e, pnumber) {
    if (!/^\d+$/.test(pnumber)) {
        $(e).val(/^\d+/.exec($(e).val()));
    }
}

function HANDLER_RESPONSE_ERROR(xhr, status, error, router, handler, HOST_URL) {
    NOTIFY_FAILED('糟糕！\n出現了問題。我們正在修復，請稍後再試。', 3000);

    $.ajax({
        type: "POST",
        url: "/common/handlers/notify?handler=slack",
        data: {
            'error_message': status + ': ' + xhr.status + ' ' + error,
            'string': xhr.responseText,
            'file': router,
            'handler': handler,
            'host': HOST_URL
        }
    });
}
