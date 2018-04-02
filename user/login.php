<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
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
                    password: {
                        required: true,
                        minlength: 8
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    password: {
                        required: "*We Need Your Password",
                        minlength: jQuery.validator.format("At least {0} characters required")
                    },
                    email: {
                        required: "*We Need Your Email Address"
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
			LOGIN
		</span>
</div>
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <img src="images/lock.jpg" width="500" height="500">
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <!-- <form action="register.php" method="POST" id="demo"> -->
                <form id="register" method="POST" action="login.php" class="leave-comment">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        WELCOME&nbsp;<b style="color:tomato">LOGIN HERE</b>
                        <hr>
                    </h4>

                    <div class="input-group">

                        <input type="email" id="email" name="email" placeholder="Enter Your Email Address"
                               class="form-control" style="height: 50px">
                    </div>
                    <br>
                    <div class="input-group">

                        <input type="password" id="password" name="password" placeholder="Enter Your password"
                               class="form-control" style="height: 50px">
                    </div>
                    <br>
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="login"
                            value="Submit" onclick="test();">LOGIN
                    </button>
                    <!-- <a href="forgot.php" class="btn btn-danger btn-md">Forgot Password</a> -->
                    <br>

                    <div class="inline-control">
                        <p align="right"><a href="forgot.php" style="color:tomato">Forgot Password ?</a></p>

                        <p style="color:blue" align="right">Do Not Have an Acoount With As? | <a href="register.php"
                                                                                                 style="color:tomato">Sign
                                Up</a></p>

                    </div>
                    <?php
                    include "connection.php";

                    if (isset($_POST["login"])) {

                        $email = $_POST["email"];
                        $password = $_POST["password"];

                        $q = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

                        $rs = mysqli_query($c, $q);
                        $count = mysqli_num_rows($rs);
                        if ($count == 1) {
                            $_SESSION["email"] = $_POST["email"];
                            // header("location:http:checkout.php");
                            echo "<script type='text/javascript'>
window.location.href = 'http://localhost/jewellery/user/index.php';
</script>";
                        } else {

                            echo "<script>alert('please check username and password')</script>";
                            // header('Location:index.php');

                        }

                    }

                    ?>

                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "footer1.php";
?>

<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<!-- <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="js/main.js"></script>
</body>
</html>
