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

<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <!-- <div class="topbar-social">
                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
            </div> -->

            <span class="topbar-child1">
					Artificial Jewellery Online Store
				</span>

            <div class="topbar-child2">
					<span class="topbar-email">
						<!-- fashe@example.com -->
                        <?php error_reporting(E_ERROR);
                        echo $_SESSION["email"]; ?>
						
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

                        <li>
                            <a href="" class="sale-noti">Jewellery</a>
                            <ul class="sub_menu">
                                <li><a href="men.php">Men Jewellery</a></li>
                                <li><a href="women.php">Women Jewellery</a></li>
                                <li><a href="kids.php">Kids Jewellery</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="aboutas.php">About</a>
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
            <!-- Header Icon -->
            <div class="header-icons">

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-01.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <!-- <form action="index.php" method="POST">-->
                    <div class="header-cart header-dropdown">
                        <div align="left">
                            <a href="register.php">Register<img src="images/icons/bg-02.png"
                                                                class="js-show-header-dropdown" alt="ICON" align="right"
                                                                width="25" height="25"></a>
                            <hr>
                            <a href="login.php">Login<img src="images/icons/icon-header-01.png"
                                                          class="js-show-header-dropdown" alt="ICON" align="right"></a>
                            <hr>
                            <a href="logout.php">Logout<img src="images/icons/icon-header-01.png"
                                                            class="js-show-header-dropdown" alt="ICON"
                                                            align="right"></a>
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
                        }
                        ?>
                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
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
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

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

            <li class="item-topbar-mobile p-l-10">
                <!-- <div class="topbar-social-mobile">
                    <a href="#" class="topbar-social-item fa fa-facebook"></a>
                    <a href="#" class="topbar-social-item fa fa-instagram"></a>
                    <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                    <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                    <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                </div> -->
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
                <a href="aboutas.php">About</a>
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
