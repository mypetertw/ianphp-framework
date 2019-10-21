function NOTIFY_SUCCESS(string, sec) {
    CLEAR_NOTIFY_LAYOUT();
    $('.notification-message').addClass('ok-style').html(string).fadeIn('fast').delay(sec).fadeOut('fast');
}

function NOTIFY_FAILED(string, sec) {
    CLEAR_NOTIFY_LAYOUT();
    $('.notification-message').addClass('error-style').html(string).fadeIn('fast').delay(sec).fadeOut('fast');
}

function CLEAR_NOTIFY_LAYOUT() {
    $('.notification-message').stop().hide().html('');
    $('.notification-message').removeClass('error-style').removeClass('ok-style');
}
