pageSize = 2;

showPage = function (page) {

    $("#block2").hide();
    $("#block2").each(function (n) {
        if (n >= pageSize * (page - 1) && n < pageSize * page)
            $(this).show();
    });
}