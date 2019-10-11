var clipboard = new ClipboardJS('.clipboard-btn');

clipboard.on('success', function(e) {
    NOTIFY_SUCCESS('已複製分享連結。', 1000);
    e.clearSelection();
});

clipboard.on('error', function(e) {

});
