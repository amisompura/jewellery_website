$(document).ready(function () {
    $('#min_price').change(function () {
        var price = $(this).val();
        var cat_id = $('#cat_id').val();
        $("#price_range").text("Product under Price Rs." + price);
        $.ajax({
            url: "load_product.php",
            method: "POST",
            data: {price: price, cat_id: 1},
            success: function (data) {
                $("#block2").html(data);
                //document.getElementById('cat_id').value = cat_id(1);
            }
        });
    });
});


