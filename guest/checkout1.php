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
    <script type="text/javascript">
        $(document).ready(function () {
            $(".main_menu").mouseover(function () {
                $("li #2").css("background-color", "tomato");
            });
            // $(".main_menu").mouseout(function(){
            //          $("li a").css("background-color","white");
            // });
        });
    </script>
    <style type="text/css">
        .error {
            color: tomato !important;
            font-family: FreeSans;
        }
    </style>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        function test() {
            $("#myform").validate({
                rules: {
                    fname: {
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
                    },
                    order_date: {
                        required: true
                    }
                },
                messages: {
                    fname: {
                        required: "name is required..."
                    },

                    address: {
                        required: "enter the address.."
                    },

                    city: {
                        required: "enter the city.."
                    },
                    state: {
                        required: "enter the state.."
                    },
                    zip: {
                        required: "enter the zip code.."
                    },
                    order_date: {
                        required: "Specify the order date.."
                    }

                }
            });
        }


    </script>
</head>
<body class="animsition">
<?php
include "header1.php";
session_start();
print_r($_SESSION);
$email = $_SESSION['email'];
$userId = $_SESSION['userId'];
?>

<hr>

<br>
<div class="row">
    <div class="col-75">
        <div class="container">
            <form action="checkout.php" id="myform" method="POST">
                <input type="hidden" name="user_id" value=<?php echo $userId; ?>>

                <div class="row">
                    <div class="col-50">
                        <h4 style="padding: 10px;">Billing Address</h4>


                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $fname; ?>"
                               placeholder="John M. Doe">

                        <label for="address"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="address" name="address" value="<?php echo $address; ?>"
                               placeholder="542 W. 15th Street">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="New York">

                        <div class="row">
                            <div class="col-50">
                                <label for="state">State</label>
                                <input type="text" id="state" name="state" value="<?php echo $state; ?>"
                                       placeholder="NY">
                            </div>
                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" value="<?php echo $zip; ?>" placeholder="10001">
                            </div>

                            <div class="col-50">
                                <label for="order_date">Order_date</label>
                                <input type="date" id="order_date" name="order_date" value="<?php echo $order_date; ?>"
                                       placeholder="">
                            </div>

                            <div class="col-50">
                                <label for="payment_type">Payment type</label>
                                <input type="radio" id="payment_type" name="payment_type"
                                       value="<?php echo $payment_type; ?>" checked>&nbsp;COD
                                <input type="radio" id="payment_type" name="payment_type"
                                       value="<?php echo $payment_type; ?>">&nbsp;Paypal
                            </div>

                        </div>
                    </div>


                </div>

                <!--        <label>-->
                <!--          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing-->
                <!--        </label>-->
                <button type="submit" name="checkout" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                        style="width: 100%;height: 50px;" onclick="test();"> Continue To Checkout
                </button>


                <!-- <input type="submit" value="Continue to checkout" class="btn"> -->

                <?php
                include "connection.php";

                if (isset($_POST["checkout"])) {
                    //  print_r($_POST);
                    //print_r($_SESSION);

                    $user_id = $_POST["user_id"];
                    $id = $_POST["id"];
                    $address = $_POST["address"];
                    $city = $_POST["city"];
                    $state = $_POST["state"];
                    $zip = $_POST["zip"];

                    $q = "SELECT * FROM user as u LEFT JOIN userorder as o ON o.user_id = u.user_id";

                    $rs = mysqli_query($c, $q);


                    $recc = mysqli_num_rows($rs);
                    if ($recc == 1) {
                        if ($user_id == $id) {
                            $up = "UPDATE userorder SET address = '$address',city='$city',state='$state',zip='$zip' WHERE id ='$id'";
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


            </form>

        </div>
    </div>
    <div class="col-25">
        <div class="container">
            <h4> Price Detail <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b><?php error_reporting(0);
              echo count($_SESSION["shopping_cart"]); ?></b>
        </span></h4>
            <?php
            if (!empty($_SESSION["shopping_cart"])) {
                $total = 0;
                foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                    ?>
                    <ul class="header-cart-wrapitem">
                        <li class="header-cart-item">
                            <div title="Remove">
                                <a href="cart.php?action=delete&p_id=<?php echo $values["item_id"]; ?>"><img
                                            src="<?php echo $URL . $values["item_image"]; ?>"
                                            style="width:80px;height: 100px;"></a>
                            </div>
                            &nbsp;
                            <div class="header-cart-item-txt" align="right">
                                <?php echo $values["item_name"]; ?>

                                <span class="header-cart-item-info" align="right">
											<?php echo $values["item_price"]; ?>
										</span>
                            </div>
                        </li>
                    </ul>
                    <div class="header-cart-total">
                    <?php

                    $total = $total + ($values["item_quntity"] * $values["item_price"]);
                }
                ?>
                <h6 style="color:tomato">Total Price : <?php echo number_format($total, 2); ?></h6>
                </div>

                <?php
            }
            ?>

        </div>
    </div>
</div>
<br>

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
<!--     <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
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
<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $("[action]").on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            $.ajax({
                url: "wishlist.php",
                method: "post",
                success: function () {
                    swal(nameProduct, "is added to wishlist !", "success");
                }
            })

        });
    });
</script>

<!--===============================================================================================-->
<!-- <script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
<script type="text/javascript">
    /*[ No ui ]
    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [ 50, 200 ],
        connect: true,
        range: {
            'min': 50,
            'max': 200
        }
    });

    var skipValues = [
    document.getElementById('value-lower'),
    document.getElementById('value-upper')
    ];

    filterBar.noUiSlider.on('update', function( values, handle ) {
        skipValues[handle].innerHTML = Math.round(values[handle]) ;
    });
</script> -->
<!--===============================================================================================-->
<script src="js/main.js"></script>

<script src="js/productload.js"></script>
<script src="js/price.js"></script>
<script src="js/search.js"></script>
<script src="js/main1.js"></script>
<script src="js/pagination.js"></script>


</body>
</html>