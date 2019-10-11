$(function() {

    if (ROUTER == '') {

        INPUT_LIMIT($('textarea[name=description]'), 'limit-keyup-description', 'limit-maxlength-description');
        INPUT_AUTO_HEIGHT($('textarea[name=description]'));
    }
});
