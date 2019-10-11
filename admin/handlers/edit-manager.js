/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('.manager-permission-btn').click(function(e) {
    e.preventDefault();
    id = e.currentTarget.dataset.id;
    permission_id = e.currentTarget.dataset.permission_id;
    if (!confirm('確定更改權限嗎？\n\n→ 若你已是管理身份，勿將權限改為「使用者」，否則將無法登入')) return;

    $('.manager-permission-btn').attr('disabled', true);

    data = {
        'id': id,
        'permission_id': permission_id
    };

    SUCCESS = function() {
        NOTIFY_SUCCESS('已保存。', 2000);
        return location.reload();
    };

    FAILED = function() {};

    ADMIN_HANDLER_CONTROL_POST('edit-manager', 'edit-manager', data, SUCCESS, FAILED);
});