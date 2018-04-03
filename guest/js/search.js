$(document).ready(function () {
    $("#search-product").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#block2 article").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
