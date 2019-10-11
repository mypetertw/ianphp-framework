/*
| NOTE: NOTIFY EVENTS (WITH /common/handlers/notify.php)
*/
if (ADMIN == 'true') {

    function GET_ONLINE_STATUS() {
        $('.load').load('/common/handlers/notify?handler=get-online-status-admin');
        setTimeout(GET_ONLINE_STATUS, 30000);
    };

} else {

    function GET_ONLINE_STATUS() {
        $('.load').load('/common/handlers/notify?handler=get-online-status');
        setTimeout(GET_ONLINE_STATUS, 30000);
    };

}

GET_ONLINE_STATUS();
