if (ADMIN) {

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
