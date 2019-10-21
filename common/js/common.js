$(function() {

    /**
     * FADEOUT LOADING LAYOUT
     */
    $('.page-loading').fadeOut('fast');
    $('.loading-layout, .loading-layout-image').fadeOut();

    /**
     * BACK EVENT
     */
    $('.back-evt-btn').on('click', function() {
        history.back(1);
    });

    /**
     * PROGRESS BAR ON ADMIN
     */
    $('.progress-bar-btn').click(function() {
        PROGRESS_BAR_ON_CLICK();
    });
});
