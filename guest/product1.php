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
    <script type="text/javascript">

        function imageZoom(imgID, resultID) {
            var img, lens, result, cx, cy;
            img = document.getElementById(imgID);
            result = document.getElementById(resultID);
            /*create lens:*/
            lens = document.createElement("DIV");
            lens.setAttribute("class", "img-zoom-lens");
            /*insert lens:*/
            img.parentElement.insertBefore(lens, img);
            /*calculate the ratio between result DIV and lens:*/
            cx = result.offsetWidth / lens.offsetWidth;
            cy = result.offsetHeight / lens.offsetHeight;
            /*set background properties for the result DIV:*/
            result.style.backgroundImage = "url('" + img.src + "')";
            result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
            /*execute a function when someone moves the cursor over the image, or the lens:*/
            lens.addEventListener("mousemove", moveLens);
            img.addEventListener("mousemove", moveLens);
            /*and also for touch screens:*/
            lens.addEventListener("touchmove", moveLens);
            img.addEventListener("touchmove", moveLens);

            function moveLens(e) {
                var pos, x, y;
                /*prevent any other actions that may occur when moving over the image:*/
                e.preventDefault();
                /*get the cursor's x and y positions:*/
                pos = getCursorPos(e);
                /*calculate the position of the lens:*/
                x = pos.x - (lens.offsetWidth / 2);
                y = pos.y - (lens.offsetHeight / 2);
                /*prevent the lens from being positioned outside the image:*/
                if (x > img.width - lens.offsetWidth) {
                    x = img.width - lens.offsetWidth;
                }
                if (x < 0) {
                    x = 0;
                }
                if (y > img.height - lens.offsetHeight) {
                    y = img.height - lens.offsetHeight;
                }
                if (y < 0) {
                    y = 0;
                }
                /*set the position of the lens:*/
                lens.style.left = x + "px";
                lens.style.top = y + "px";
                /*display what the lens "sees":*/
                result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
            }

            function getCursorPos(e) {
                var a, x = 0, y = 0;
                e = e || window.event;
                /*get the x and y positions of the image:*/
                a = img.getBoundingClientRect();
                /*calculate the cursor's x and y coordinates, relative to the image:*/
                x = e.pageX - a.left;
                y = e.pageY - a.top;
                /*consider any page scrolling:*/
                x = x - window.pageXOffset;
                y = y - window.pageYOffset;
                return {x: x, y: y};
            }
        }
    </script>

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
        <!-- Product Page
        <i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i> -->
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
            <form method="POST" action="product1.php?action=addproduct&p_id=<?php echo $row[0]; ?>">
                <div class="wrap-slick3 flex-sb flex-w">

                    <div class="wrap-slick3-dots"></div>

                    <div class="slick3">

                        <div class="item-slick3" data-thumb="<?php echo $URL . $row[10] ?>">
                            <div class="wrap-pic-w img-zoom-container">
                                <img id='myImg' src=<?php echo $URL . $row[10] ?> alt="image"
                                     style="width:600px;height: 600px;">
                                <div class="img-zoom-container">

                                    <div id="myresult" class="img-zoom-result"></div>
                                </div>
                            </div>

                        </div>

                        <div class="item-slick3" data-thumb="<?php echo $URL . $row[11] ?>">
                            <div class="wrap-pic-w img-zoom-container">
                                <img id='myImg1' src=<?php echo $URL . $row[11] ?> alt="image"
                                     style="width:600px;height: 600px;">
                                <div class="img-zoom-container">

                                    <div id="myresult1" class="img-zoom-result"></div>
                                </div>
                            </div>
                        </div>

                        <div class="item-slick3" data-thumb="<?php echo $URL . $row[12] ?>">
                            <div class="wrap-pic-w img-zoom-container">
                                <img id='myImg2' src=<?php echo $URL . $row[12] ?> alt="image" style="
								width:600px;height: 600px;">
                                <div class="img-zoom-container">

                                    <div id="myresult2" class="img-zoom-result"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <input type="hidden" name="hidden_uid" value="<?php echo $row1['user_id']; ?>">
        <input type="hidden" name="hidden_image" value="<?php echo $row1['image']; ?>">
        <input type="hidden" name="hidden_name" value="<?php echo $row1['p_name']; ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $row1['price']; ?>">
        <input type="hidden" name="hidden_total" value="<?php echo $row1['total_amt']; ?>">

        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?php echo ".$row[1]."; ?>
            </h4>

            <span class='m-text17'>
				Retails Price: <del><?php echo ".$row[6]." ?></del>
				</span>
            <br><br>
            <span class='m-text17' style='color:red'>
					RS.<?php echo ".$row[5]." ?>
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
                        <?php echo ".$row[4]." ?>
                    </p>
                </div>
            </div>

            <?php
            }
            ?>


            <div class='flex-r-m flex-w p-t-10'>
                <div class='w-size16 flex-m flex-w'>
                    <div class='flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10'>
                        <button class='btn-num-product-down color1 flex-c-m size7 bg8 eff2'>
                            <i class='fs-12 fa fa-minus' aria-hidden='true'></i>
                        </button>

                        <input class='size8 m-text18 t-center num-product' type='number' name='num-product' value='1'>

                        <button class='btn-num-product-up color1 flex-c-m size7 bg8 eff2'>
                            <i class='fs-12 fa fa-plus' aria-hidden='true'></i>
                        </button>
                    </div>
                    <br>
                    <div class='btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10'>
                        <!-- Button -->
                        <button class='flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4' name="add_to_cart">
                            Add to Cart
                        </button>
                        <br>
                        <input action="action" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4"
                               onclick="window.history.go(-1); return false;" type="button" value="Back"/>

                    </div>
                </div>
            </div>
        </div>


        <div class="p-b-45">

        </div>

        <!--  -->
        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">


            <div class="dropdown-content dis-none p-t-15 p-b-23">

            </div>
        </div>

        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">

            <div class="dropdown-content dis-none p-t-15 p-b-23">

            </div>
        </div>

        <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">


            <div class="dropdown-content dis-none p-t-15 p-b-23">

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
<script>
    // Initiate zoom effect:
    imageZoom("myImg", "myresult");
    imageZoom("myImg1", "myresult1");
    imageZoom("myImg2", "myresult2");
</script>
</body>
</html>
