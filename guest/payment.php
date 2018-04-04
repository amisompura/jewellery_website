<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/checkout.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="animsition">

<?php
include "header.php";
?>

<?php

include "connection.php";

$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'komalthakkar1012@gmail.com'; //Business Email

?>

<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="#" onClick="history.go(-1); return false;" class="s-text16">Go back
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <span class="s-text17">
           Select Payment Type
		</span>
</div>
<form class="paypal" action="payment.php" method="post" id="paypal_form" target="_blank">
    <input type="hidden" name="cmd" value="_xclick"/>
    <input type="hidden" name="no_note" value="1"/>
    <input type="hidden" name="lc" value="UK"/>
    <input type="hidden" name="currency_code" value="RS."/>
    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest"/>
    <input type="hidden" name="first_name" value="Customer's First Name"/>
    <input type="hidden" name="last_name" value="Customer's Last Name"/>
    <input type="hidden" name="payer_email" value="customer@example.com"/>
    <input type="hidden" name="item_number" value="123456" / >

    <section class="bgwhite p-t-66 p-b-60">
        <div class="container">
            <div class="row" style="border: none;">
                <div class="col-md-6 p-b-30">

                    <div>
                        <img src="images/download.png" width="500" height="300">
                        <br>
                        <br>
                        <input class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="paypal"
                               value="Paypal"/>

                    </div>

                </div>

                <div class="col-md-6 p-b-30">
                    <div>
                        <img src="images/cod-in-bd.jpg" width="500" height="300">
                        <br>
                        <br>
                        <input class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="cod"
                               value="COD"/>
                    </div>
                </div>
            </div>

        </div>
    </section>
</form>

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