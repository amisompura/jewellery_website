<?php
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';
session_start();


$c = mysqli_connect("localhost", "root", "", "jewells");

if (isset($_POST["add_to_cart"])) {
    error_reporting(E_ALL);
    $cart_id = $_POST['cart_id'];
    // $user_id = $_POST['user_id'];
    $p_id = $_GET["p_id"];
    $p_name = $_POST['hidden_name'];
    $image = $_POST['hidden_image'];
    $qty = $_POST['quntity'];
    $price = $_POST['hidden_price'];
    $sql = "INSERT INTO cart (cart_id,user_id,p_id,p_name,image,qty,price,total_amt) VALUES ('$cart_id',NULL,'$p_id','$p_name','$image','$qty','$price',NULL)";;
    $rs = mysqli_query($c, $sql);
    if (isset($_SESSION["shopping_cart"])) {


        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["p_id"], $item_array_id)) {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id' => $_GET["p_id"],
                'item_image' => $_POST["hidden_image"],
                'item_name' => $_POST["hidden_name"],
                'item_price' => $_POST["hidden_price"],
                'item_quntity' => $_POST["quntity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        } else {
            echo '<script>alert("item already Added")</script>';
            echo '<script>window.location="cart.php"</script>';
        }
    } else {
        $item_array = array(
            'item_id' => $_GET["p_id"],
            'item_image' => $_POST["hidden_image"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quntity' => $_POST["quntity"]
        );
        $_SESSION["shopping_cart"]["p_id"] = $item_array;
    }
}
if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        $p_id = $_GET["p_id"];
        $sql = "DELETE FROM cart WHERE p_id = '$p_id";
        $rs = mysqli_query($c, $sql);

        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_id"] == $_GET["p_id"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("item Removed")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }

    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Detail</title>
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
    <link rel="stylesheet" type="text/css" href="css/zoom.css">
    <!--===============================================================================================-->
</head>
<body class="animsition">
<?php
include "header.php";
?>
<!-- breadcrumb -->
<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
    <a href="index.php" class="s-text16">
        Home
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>
    </a>

    <!-- <a href="#" class="s-text16"> -->
    <a href="#" onClick="history.go(-1); return false;" class="s-text16">Go back
        <i class="fa fa-angle-left m-l-8 m-r-9" aria-hidden="true"></i>

    </a>
    <span class="s-text17">
			Products
		</span>
</div>

<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <?php
        include "connection.php";

        $cat_id = $_GET["cat_id"];

        $s = "select * from product where p_id='$cat_id'";
        $rs = mysqli_query($c, $s);

        ?>
        <?php
        while ($row = mysqli_fetch_array($rs))
        {

        ?>
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>

                <div class="slick3">
                    <div class="item-slick3" data-thumb="<?php echo $URL . $row['image']; ?>">
                        <div class="wrap-pic-w img-zoom-container">
                            <img id='myImg' src=<?php echo $URL . $row['image']; ?> alt="image"
                                 style="width:600px;height: 700px;">
                            <div class="img-zoom-container">

                                <div id="myresult" class="img-zoom-result"></div>
                            </div>
                        </div>

                    </div>

                    <div class="item-slick3" data-thumb="<?php echo $URL . $row['image1']; ?>">
                        <div class="wrap-pic-w img-zoom-container">
                            <img id='myImg1' src=<?php echo $URL . $row['image1']; ?> alt="image"
                                 style="width:600px;height: 700px;">
                            <div class="img-zoom-container">

                                <div id="myresult1" class="img-zoom-result"></div>
                            </div>
                        </div>
                    </div>

                    <div class="item-slick3" data-thumb="<?php echo $URL . $row['image2']; ?>">
                        <div class="wrap-pic-w img-zoom-container">
                            <img id='myImg2' src=<?php echo $URL . $row['image2']; ?> alt="image"
                                 style="width:600px;height: 700px;">
                            <div class="img-zoom-container">

                                <div id="myresult2" class="img-zoom-result"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?php echo $row['p_name']; ?>
            </h4>

            <span class='m-text17'>
				Retails Price: <del><?php echo $row['rprice']; ?></del>
				</span>
            <br><br>
            <span class='m-text17' style='color:tomato'>
					RS.<?php echo $row['price']; ?>
				</span>
            <br><br>
            <div class='wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content'>
                <h5 class='js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4'>
                    Description
                    <i class='down-mark fs-12 color1 fa fa-minus dis-none' aria-hidden='true'></i>
                    <i class='up-mark fs-12 color1 fa fa-plus' aria-hidden='true'></i>
                </h5>

                <div class='dropdown-content dis-none p-t-15 p-b-23'>
                    <p class='s-text8'>
                        <?php echo $row['description']; ?>
                    </p>
                </div>
            </div>
            <div class='flex-r-m flex-w p-t-10'>
                <div class='w-size16 flex-m flex-w'>
                    <!-- <div class='flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10'>
                        <button class='btn-num-product-down color1 flex-c-m size7 bg8 eff2'>
                            <i class='fs-12 fa fa-minus' aria-hidden='true'></i>
                        </button>

                        <input class='size8 m-text18 t-center num-product' type='number' name='num-product' value='1'>

                        <button class='btn-num-product-up color1 flex-c-m size7 bg8 eff2'>
                            <i class='fs-12 fa fa-plus' aria-hidden='true'></i>
                        </button>
                    </div> -->
                    <div>
                        <label style="color:black">Quntity:&nbsp;&nbsp;</label>
                        <input type="number" name="quntity" value="1"
                               style="width: 150px;height: 40px;text-align:center;background-color: lightgray">
                        <br><br>
                        <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>">
                        <input type="hidden" name="hidden_name" value="<?php echo $row['p_name']; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">

                        <input class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type="submit"
                               name="add_to_cart" value="Add To Cart">
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>


    </div>
</div>
</div>
</div>


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
<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function () {
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });

    $('.btn-addcart-product-detail').each(function () {
        var nameProduct = $('.product-detail-name').html();
        $(this).on('click', function () {
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>


<script src="js/main.js"></script>
<script src="js/zoom.js"></script>

</body>
</html>
