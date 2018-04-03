<!DOCTYPE html>
<html lang="en">
<head>
    <title>ForgotPassword</title>
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
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <style type="text/css">
        .error {
            color: tomato !important;
        }
    </style>


    <script>
        function test() {
            $("#register").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
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
			FORGOT PASSWORD
		</span>
</div>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <img src="images/a11.jpg" width="500" height="500">
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <form class="leave-comment" action="forgot.php" method="POST" id="register">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Forgot Password Then Fillup This Form
                    </h4>

                    <div class="input-group">

                        <input type="email" placeholder="Enter Email Address" id="email" class="form-control"
                               name="email" style="height: 60px">
                    </div>
                    <br>
                    <div>
                        <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="submit"
                                value="Submit" onclick="test();">SUBMIT
                        </button>
                    </div>


                    <?php
                    include "connection.php";

                    if (isset($_POST["submit"])) {

                        $email = $_POST["email"];


                        $q = "SELECT * FROM user WHERE email = '$email'";

                        $rs = mysqli_query($c, $q);
                        $count = mysqli_num_rows($rs);
                        if ($count == 1) {
                            $_SESSION["email"] = $_POST["email"];
                            // header("location:resetforgot.php");
                            echo "<script type='text/javascript'>
window.location.href = 'http://localhost/jewellery/guest/resetforgot.php';
</script>";
                        } else {

                            echo "<script>alert('please check email address')</script>";;
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
<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
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
