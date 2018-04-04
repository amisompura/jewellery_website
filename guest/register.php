<!DOCTYPE html>
<html lang="en">
<head>
    <title>REGISTRATION</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
        .error {
            color: tomato !important;
        }

    </style>

    <script>
        function test() {
            $("#register").validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 2
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    gender: {
                        required: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    contact_no: {
                        required: true,
                        minlength: 10
                    },
                    regidate: {
                        required: true
                    }
                },
                messages: {
                    fname: {
                        required: "*We need your username.",
                        minlength: jQuery.validator.format("At least {0} characters required!")
                    },
                    password: {
                        required: "*We need your password.",
                        minlength: jQuery.validator.format("At least {0} characters required")
                    },
                    gender: {
                        required: "*We need your gender."
                    },
                    email: {
                        required: "*We need your email address."
                    },
                    contact_no: {
                        required: "*We need your contact number.",
                        minlength: jQuery.validator.format("At least {0} Digits required!")
                    },
                    regidate: {
                        required: "*We need your registration date."
                    }
                }
            });
        }

    </script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
</head>

<body class="animsition">
<?php
include "header.php";
?>

<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="#" onClick="history.go(-1); return false;" class="s-text16">Go back
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    <span class="s-text17">
			REGISTRATION FORM
		</span>
</div>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <img src="images/regi.jpg" width="500" height="500">
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <!-- <form action="register.php" method="POST" id="demo"> -->
                <form id="register" method="post" action="" class="leave-comment">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        HELLO THERE, SIGNUP HERE
                    </h4>

                    <div>
                        <input type="text" id="fname" name="fname" placeholder="Enter Your FirstName"
                               class="form-control" style="color: black;height: 60px">

                    </div>
                    <br>
                    <div>
                        <input type="email" id="email" name="email" placeholder="Enter Your Email Address"
                               class="form-control" style="color: black;height: 60px">
                    </div>
                    <br>
                    <div>
                        <input type="text" id="contact_no" name="contact_no" placeholder="Enter Your ContactNumber"
                               class="form-control" style="color: black;height: 60px">
                    </div>

                    <br>
                    <div>
                        <input type="password" id="password" name="password" placeholder="**********"
                               class="form-control" style="color: black;height: 60px">
                    </div>
                    <div>
                        <label>Gender:&nbsp;&nbsp;</label>
                        <input type="radio" name="gender" value="M" checked="true">Male
                        &nbsp;<input type="radio" name="gender" value="F">Female
                    </div>

                    <br>

                    <div>
                        <input type="date" id="regdate" name="regdate" placeholder="DD/MM/YYYY" class="form-control"
                               style="color: black;height: 60px">
                    </div>
                    <br>
                    <div>
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="submit"
                                value="submit" onclick="test();">SUBMIT FORM
                        </button>
                    </div>
                    <br>
                    <div align="right">
                        <p style="color:black">If You Already Have Account ? | <a href="login.php" style="color:red">Login</a>
                        </p>
                    </div>
                </form>


                <?php

                include "connection.php";

                //                error_reporting(E_ERROR);

                if (isset($_POST["submit"])) {

                    $fname = $_POST["fname"];
                    $email = $_POST["email"];
                    $contact_no = $_POST["contact_no"];
                    $password = $_POST["password"];
                    $gender = $_POST["gender"];
                    $regdate = $_POST["regdate"];

                    $q = "INSERT INTO user (fname, email, contact_no, password, gender, regdate) VALUES ('$fname', '$email', '$contact_no', '$password', '$gender', '$regdate')";
                    mysqli_query($c, $q);

                    header("loaction:login.php");
                }

                ?>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>


<!--===============================================================================================-->
<!-- <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    $(".selection-1").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });

    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect2')
    });
</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
