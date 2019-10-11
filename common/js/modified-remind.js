var MODIFIED_PAGE = [
    '',
];

if (ROUTER == MODIFIED_PAGE) {
    var isChangeField = false;
    var editObj = $('input, textarea, select');

    editObj.change(function() {
        isChangeField = true;
        $(this).addClass('modified');
    });

    $(window).bind('beforeunload', function(e) {
        if (isChangeField || editObj.hasClass('modified')) {
            return '你的進度還沒有保存，你想離開嗎？';
        }
    });

    function MODIFY_REMIND_ALLOW() {
        isChangeField = false;
        $('input, textarea, select').removeClass('modified');
    }
}
