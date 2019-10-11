/*
| NOTE: ***IMPORTANT*** DO NOT EDIT THOSE VALUES ***IMPORTANT***
*/
$('#search').submit(function(e) {
    e.preventDefault();
    search_query = $('#search_query').val();
    $('#search-loading').hide().html('<img src="/images/loading.svg" style="width: 15px;">').fadeIn();

    $.ajax({
        type: "GET",
        timeout: TIMEOUT,
        url: "/admin/handlers/search?handler=search&search_query=" + search_query,
        success: function(data) {
            var data = JSON.parse(data);

            if (data.code === 200) {
                return location.href = '/admin/search/' + search_query + '';
            } else {
                return NOTIFY_FAILED(data.message, 3000);
            }

        },
        error: function(xhr, status, error) {
            return HANDLER_RESPONSE_ERROR(xhr, status, error, ROUTER, 'search', HOST_URL);
        }
    });
});
