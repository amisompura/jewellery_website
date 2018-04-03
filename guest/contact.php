<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact</title>
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
    <!--===============================================================================================-->
</head>
<body class="animsition">

<?php
include "header.php";
?>

<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/contact12.jpg);">
    <h2 class="l-text2 t-center" style="color:black">

    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <img src="images/contact3.jpg" width="500" height="500">
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <form class="leave-comment" method="POST" action="contact.php">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Send us your message
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="contact_name"
                               placeholder="Full Name">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email"
                               placeholder="Email Address">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="contact_no"
                               placeholder="Phone Number">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <select id="city" name="city" class="sizefull s-text7 p-l-22 p-r-22">
                            <option value="">Select City</option>
                            <option value="Ahmedabad">Ahmedabad</option>
                            <option value="Puna">Puna</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Rajkot">Rajkot</option>
                            <option value="Jamnagar">Jamnagar</option>
                            <option value="Mehsana">Mehsana</option>
                            <option value="Mumbai">USA</option>
                        </select>
                    </div>

                    <div>
                        <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="w-size25">
                        <!-- Button -->
                        <input type="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4" name="send"
                               value="SEND">

                    </div>
                </form>


                <?php
                include "connection.php";
                error_reporting(E_ALL);

                if (isset($_POST["send"])) {

                    $contact_name = $_POST["contact_name"];
                    $email = $_POST["email"];
                    $contact_no = $_POST["contact_no"];
                    $city = $_POST["city"];
                    $message = $_POST["message"];

                    $q = "INSERT INTO contactas(contact_name,email,contact_no,city,message) 
                                VALUES('$contact_name','$email','$contact_no','$city','$message')";
                    //echo $q;
                    $rs = mysqli_query($c, $q);

                    // header("loaction:login.php");
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
<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
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
