<?php
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';
session_start();

include "connection.php";


if (isset($_POST["add_to_cart"])) {
    // error_reporting(E_ALL);
    // $cart_id = $_POST['cart_id'];

    $p_id = $_GET["p_id"];
    $p_name = $_POST['hidden_name'];
    $image = $_POST['hidden_image'];
    $qty = $_POST['qty'];
    $Price = $_POST['hidden_price'];
    $total_amt = $_POST['hidden_total'];


    $sql = "INSERT INTO cart1(p_id, p_name, image, qty, Price, total_amt) VALUES ('$p_id', '$p_name', '$image', '$qty', '$Price', NULL)";

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
                'item_quntity' => $_POST["quntity"],
                'item_total' => $_POST["hidden_total"],
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
            'item_quntity' => $_POST["quntity"],
            'item_total' => $_POST["hidden_total"],
        );
        $_SESSION["shopping_cart"]["p_id"] = $item_array;
    }
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        $p_id = $_GET["p_id"];

        $sql = "DELETE FROM cart WHERE p_id = '$p_id'";
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

if (isset($_GET["action"])) {
    if ($_GET["action"] == "remove") {
        unset($_SESSION["shopping_cart"]);

    }
}

?>

<head>
    <style>
        .wrong {
            margin-top: 5px;
            padding: 5px;
            background-color: lightgrey;
            border: 0px solid lightslategrey;
            width: auto;
            color: black;
            font-family: 'Droid Sans', sans-serif;
        }
    </style>
</head>

<!-- Header -->
<header class="header1">

    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <span class="topbar-child1">
					Free shipping for standard order over ₹500
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						<!-- fashe@example.com -->
						Welcome:&nbsp;<?php echo $_SESSION["email"]; ?>
					</span>
            </div>
        </div>

        <div class="wrap_header">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="images/icons/logo.png" alt="IMG-LOGO">
            </a>

            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <?php
                        include "connection.php";

                        $q = "select * from category";
                        $rs = mysqli_query($c, $q);
                        ?>
                        <li>
                            <a href="" class="sale-noti">Jewellery</a>
                            <ul class="sub_menu">
                                <?php
                                while ($row = mysqli_fetch_array($rs)) {
                                    ?>

                                    <li><a href="<?php echo $row['url']; ?>"><?php echo $row['cat_name']; ?></a></li>

                                    <?php
                                }
                                ?>
                            </ul>
                        </li>

                        <!-- 	<li>
                                <a href="#">About</a>
                            </li>
                         -->
                        <!--                        <li>-->
                        <!--                            <a href="login.php">Login</a>-->
                        <!--                        </li>-->

                        <li>
                            <a href="contact.php">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Icon -->
            <div class="header-icons">

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <div class="header-cart header-dropdown">
                        <div align="left">
                            <a href="logout.php">logout<img src="images/icons/user.jpg" class="js-show-header-dropdown"
                                                            alt="ICON" align="right" width="25" height="25"></a>
                        </div>
                    </div>
                </div>
                <span class="linedivide1"></span>

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php error_reporting(0);
                        echo count($_SESSION["shopping_cart"]); ?></span>

                    <div class="header-cart header-dropdown">
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

                        } elseif (!isset($_SESSION["shopping_cart"]) < 1) {
                            echo "<div class=\"wrong\">You Have No Item In Your Shoppping Cart</div>";
                            echo "<br>";
                        }
                        ?>
                        <br>
                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="login.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.php" class="logo">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                </a>
                <div class="header-cart header-dropdown">
                    <div align="left">
                        <a href="register.php">Register<img src="images/icons/user.jpg" class="js-show-header-dropdown"
                                                            alt="ICON" align="right" width="25" height="25"></a>
                        <hr>
                        <a href="logout.php">Logout<img src="images/icons/icon-header-01.png"
                                                        class="js-show-header-dropdown" alt="ICON" align="right"></a>
                    </div>

                </div>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti"><?php error_reporting(0);
                        echo count($_SESSION["shopping_cart"]); ?></span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
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

                        } elseif (!isset($_SESSION["shopping_cart"]) < 1) {
                            echo "<div class=\"wrong\">You Have No Item In Your Shoppping Cart</div>";
                            echo "<br>";
                        }
                        ?>
                        <br>
                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.html" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu">
        <nav class="side-menu">


            <li>
                <a href="index.php">Home</a>
            </li>
            <li class="item-menu-mobile">

                <a href="" class="sale-noti">Jewellery</a>
                <ul class="sub_menu">
                    <li><a href="men.php">Men Jewellery</a></li>
                    <li><a href="women.php">Women Jewellery</a></li>
                    <li><a href="kids.php">Kids Jewellery</a></li>

                </ul>
            </li>

            <li>
                <a href="login.php">Login</a>
            </li>

            <li>
                <a href="contact.php">Contact</a>
            </li>
            </ul>
        </nav>
    </div>
</header>


