$(".block2-btn-addcart").submit(function (e) {
    var form_data = $(this).serialize();
    var button_content = $(this).find('button[type=submit]');
    button_content.html('Adding...');
    $.ajax({
        url: "cart.php",
        type: "POST",
        dataType: "json",
        data: form_data
    }).done(function (data) {
        $(".block2-name").html(data.products);
        button_content.html('Add to Cart');
    })
    e.preventDefault();
});