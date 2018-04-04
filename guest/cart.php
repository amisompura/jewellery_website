
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
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
    <style>
        .info {
            background-color: #ffdddd;
            border-left: 6px solid #f44336;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 10px;
            padding-right: 10px;

            width: 100%;
        }

    </style>
</head>
<body class="animsition">

<?php
include 'header.php';
?>

<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/cart3.jpg);">
    <h2 class="l-text2 t-center" style="color:tomato">
        Cart
    </h2>
</section>

<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">

        <br>
        <div class="container-table-cart pos-relative">

            <div class="wrap-table-shopping-cart bgwhite">

                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1">Image</th>
                        <th class="column-2">Items</th>
                        <th class="column-2">Quantity</th>
                        <th class="column-3">Price</th>
                        <th class="column-5">Total</th>
                        <th class="column-5"><a href="cart.php?action=remove"
                                                class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Empty&nbsp;Cart</a>
                        </th>

                    </tr>

                    <?php

                    if (!empty($_SESSION["shopping_cart"])) {
                    $total = 0;
                        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                        ?>

                        <tr class='table-row'>
                            <td class='column-1'>
                                <img src="<?php echo $URL . $values["item_image"]; ?>"
                                     style="width:80px;height: 100px;">
                            </td>
                            <td class='column-2'><?php echo $values["item_name"]; ?></td>

                            <td class="column-2"><?php echo $values["item_quntity"]; ?></td>
                            <input type="hidden" name="cart_id" value="<? echo $values['cart_id']; ?>">

                            <td class="column-3"><?php echo $values["item_price"]; ?></td>
                            <td class='column-3'>
                                RS. <?php echo number_format($values["item_quntity"] * $values["item_price"]); ?></td>
                            <td class="column-3"><a href="cart.php?action=delete&p_id=<?php echo $values["item_id"]; ?>"
                                                    class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Delete
                            </td>
                        </tr>

                        <?php

                        $total += ($values["item_quntity"] * $values["item_price"]);
                        }
                        ?>

                    <tr>
                        <td class='column-3' colspan="4" align="right">Final Total</td>
                        <td class="column-3">RS.<?php echo number_format($total, 2); ?></td>
                    </tr>


                        <?php
                    } elseif (!isset($_SESSION["shopping_cart"]) < 1) {
                        echo "<td colspan='6' class=\"info\">You Have No Item In Your Shoppping Cart</td>";

                }
                ?>


                </table>
            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div>
                <div>
                    <!--                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">-->
                </div>

                <div>
                    <!--                    <input class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" type="submit" name="coupon-code" placeholder="Coupon Code" value="Coupan Code">-->
                </div>
            </div>
            <div class="size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <input action="action" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                       onclick="window.history.go(-1); return false;" type="button" value="Continue Shopping"
                       style="padding-right:10px;padding-left:10px;padding-bottom: 10px;padding-top: 10px "/>

            </div>
        </div>

        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                Cart Totals
            </h5>

            <div class="flex-w flex-sb-m p-b-12">
               <span class="s-text18 w-size19 w-full-sm">
                  Subtotal:
               </span>

                <span class="m-text21 w-size20 w-full-sm">
                RS. <?php echo number_format($total, 2); ?>
               </span>
            </div>

            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
               <span class="s-text18 w-size19 w-full-sm">
                  Shipping:
               </span>

                <div class="w-size20 w-full-sm">
                    Free
                </div>
                <br>
            </div>

            <div class="flex-w flex-sb-m p-t-26 p-b-30">
                   <span class="m-text22 w-size19 w-full-sm">
                    Grand Total:
                   </span>

                <span class="m-text21 w-size20 w-full-sm">
                    RS. <?php echo number_format($total, 2); ?>
                    </span>
            </div>

            <div class="size15 trans-0-4">
                <a href="login.php" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">Proceed to
                    Checkout</a>
            </div>
        </div>

    </div>
    </div>
</section>

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
<script src="js/main.js"></script>
<script src="js/city.js"></script>
</body>
</html>