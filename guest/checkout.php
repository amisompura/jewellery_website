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

    <script type="text/javascript">
        $(document).ready(function () {
            $(".main_menu").mouseover(function () {
                $("li #2").css("background-color", "tomato");
            });

        });
    </script>
    <style type="text/css">
        .error {
            color: tomato !important;
            font-family: FreeSans;
        }

    </style>
    <script>

        function test() {
            $("#checkout").validate({
                rules: {
                    email: {
                        required: true
                    },
                    address: {
                        required: true
                    },
                    city: {
                        required: true
                    },
                    state: {
                        required: true
                    },
                    zip: {
                        required: true
                    }
                },
                messages: {
                    fname: {
                        required: "*We need your full name."
                    },
                    email: {
                        required: "*We need your email address."
                    },
                    address: {
                        required: "*We need your address."
                    },
                    city: {
                        required: "*We need your city name."
                    },
                    state: {
                        required: "*We need your state name."
                    },
                    zip: {
                        required: "*We need zip code."
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
session_start();
//print_r($_SESSION);
$email = $_SESSION['email'];
$userId = $_SESSION['userId'];
?>

<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="#" onClick="history.go(-2); return false;" class="s-text16"><b>Go back</b>
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>
    <span class="s-text17">
			<b>CHECKOUT</b>
		</span>
</div>

<br>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="checkout.php" id="checkout" method="post">
                <input type="hidden" name="user_id" value=<?php echo $userId; ?>>

                <div class="row">
                    <div class="col-50">
                        <h4 style="text-align: center;padding-top: 7px">Billing Address</h4>

                        <label><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>"/>

                        <label><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" value="<?php echo $city; ?>"/>

                        <label>State</label>
                        <input type="text" id="state" name="state" value="<?php echo $state; ?>"/>

                        <div class="row">
                            <div class="col-50">
                                <label>Zip</label>
                                <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>"/>
                            </div>

                            <div class="col-50">
                                <label>Order Date:</label>
                                <input type="date" name="order_date"/>
                            </div>

                            <div class="col-50">
                                <label for="payment_type">Payment type</label>
                            </div>
                            <div class="col-50">

                                <input type="radio" id="payment_type" name="payment_type"
                                       value="<?php echo $payment_type; ?>" checked>&nbsp;COD
                                <input type="radio" id="payment_type" name="payment_type"
                                       value="<?php echo $payment_type; ?>">&nbsp;Paypal

                            </div>
                        </div>
                    </div>
                </div>

                <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="submit"
                        value="submit" onclick="test();">PROCESS TO PAYMENT
                </button>
            </form>
        </div>
    </div>

    <?php
    include "connection.php";

    if (isset($_POST["checkout"])) {
//          print_r($_POST);
//        print_r($_SESSION);

        $user_id = $_POST["user_id"];
        $id = $_POST["id"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $order_date = $_POST["order_date"];
        $payment_type = $_POST["payment_type"];

        $q = "SELECT * FROM user as u LEFT JOIN userorder as o ON o.user_id = u.user_id";

        $rs = mysqli_query($c, $q);

        $recc = mysqli_num_rows($rs);

        if ($recc == 1) {
            if ($user_id == $id) {
                $up = "UPDATE userorder SET address = '$address',city='$city',state='$state',zip='$zip', order_date = '$order_date' WHERE id ='$id'";
                // echo $q;
                $rs1 = mysqli_query($c, $up);
                //  header("location:payment.php");
                echo "<script type='text/javascript'>
window.location.href = 'payment.php';
</script>";
            }

        } else {
            echo "plz check your details";
        }

    }


    ?>

    <div class="col-25">
        <div class="container" style="padding-left: 40px;padding-right: 40px;">
            <br>
            <h5 style="color: #0b2e13"><u>Price Detail</u>
                <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b><?php error_reporting(0);
              echo count($_SESSION["shopping_cart"]); ?>
          </b>
        </span>
                <hr>
            </h5>

            <?php
            if (!empty($_SESSION["shopping_cart"]))
            {
            $total = 0;
            foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                <tr class='table-row'>
                    <td class='column-2' style="color: #8a1f11"><?php echo $values["item_quntity"]; ?></td>&nbsp;X&nbsp;
                    <td class='column-2'><?php echo $values["item_name"]; ?></td>
                    <br>

                    <td class="column-3" style="color: #8a1f11">Rs.<?php echo $values["item_price"]; ?></td>
                    <br><br>
                </tr>
                <?php
                $total += ($values["item_quntity"] * $values["item_price"]);
            }
            ?>
            <br><br><br><br>
            <h6 style="color:black" align="left">Sub-Total</h6>
            <h6 style="color:#8a1f11" align="right">RS.<?php echo number_format($total, 2); ?></h6>
            <hr>
            <h6 style="color:black" align="left">Delivery Charge</h6>
            <h6 style="color:#8a1f11" align="right">free</h6>
            <hr>
            <h6 style="color:black" align="left">Total</h6>
            <h6 style="color:#8a1f11" align="right">RS.<?php echo number_format($total, 2); ?></h6>
        </div>
        <?php
        }
        elseif (!isset($_SESSION["shopping_cart"]) < 1) {
            echo "Cart Is Empty";
        }

        ?>
    </div>
</div>
<br>
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
