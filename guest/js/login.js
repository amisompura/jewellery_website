$(document).ready(function () {
    $("#loginForm").validate({
        rules: {
            email: {
                required: true
            },
            password: {
                required: true
            }
        },
        messages: {
            email: {
                required: "specify email"
            },
            password: {
                required: "specify password"
            }
        },
        submitHandler: function (form) { // for demo
            alert('valid form');
            return false;
        }
    });
});