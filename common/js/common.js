$(function() {

    /*
    | NOTE: FADEOUT LOADING LAYOUT
    */
    $('.page-loading').fadeOut('fast');
    $('.loading-layout, .loading-layout-image').fadeOut();

    /*
    | NOTE: BACK EVENT
    */
    $('.back-evt-btn').on('click', function() {
        history.back(1);
    });

    /*
    | NOTE: PROGRESS BAR ON ADMIN
    */
    $('.progress-bar-btn').click(function() {
        PROGRESS_BAR_ON_CLICK();
    });
});
