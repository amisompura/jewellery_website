function test() {
    $("#subscribe").validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            name: {
                required: "*We need your username.",
                minlength: jQuery.validator.format("At least {0} characters required!")
            },
            email: {
                required: "*We need your email address."
            }
        }
    });
}
