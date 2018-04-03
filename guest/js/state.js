function fetch_select(val) {
    $.ajax({
        type: 'post',
        url: 'fetch_data.php',
        data: {
            get_option: val
        },
        success: function (response) {
            document.getElementById("city").innerHTML = response;
        }
    });
}