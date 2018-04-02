<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kids</title>
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
    <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" media="all" href="css/search.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body class="animsition">

<?php
include "header.php";

?>
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/kidsbanner.jpg);">
    <h2 class="l-text2 t-center">
        Kids
    </h2>
    <p class="m-text13 t-center">
        New Arrivals Kids Collection 2018
    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Categories
                    </h4>

                    <ul class="p-b-54">
                        <li class="p-t-4">
                            <!--<a href="kids.php" class="s-text13 active1">
                                All
                            </a>-->
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsnecklace();">
                                Necklace
                            </button>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsearrings();">
                                Earrings
                            </button>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsring();">
                                Rings
                            </button>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsbraclet();">
                                Braclete
                            </button>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidschain();">
                                Chain
                            </button>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidspendal();">
                                Pendals
                            </button>
                        </li>
                    </ul>

                    <!--  -->
                    <h4 class="m-text14 p-b-32">
                        Filters
                    </h4>

                    <div class="filter-price p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-17">
                            Price
                        </div>

                        <div class="wra-filter-bar">
                            <input type="range" min="0" max="4000" value="10000"
                                   id="min_price" name="min_price" class="slider"/>
                        </div>

                        <div class="flex-sb-m flex-w p-t-16">
                            <div class="w-size11">
                                <!-- Button -->
                                <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                    Filter
                                </button>
                            </div>
                            <div class="s-text3 p-t-10 p-b-10">
                                Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">

                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting">
                                <option>Default Sorting</option>
                                <option>Popularity</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select>
                        </div>

                        <div class="rs2-select2 bo4 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting">
                                <option>Price</option>
                                <option>RS 100.00 - RS 500.00</option>
                                <option>RS 500.00 - RS 1000.00</option>
                                <option>RS 1000.00 - RS 1500.00</option>
                                <option>RS 1500.00 - RS 2000.00</option>
                                <option>RS 2000.00+</option>
                            </select>
                        </div>
                    </div>

                    <div class="search-product pos-relative bo4 of-hidden">
                        <input id="myInput" type="text" placeholder="Search" class="s-text7 size6 p-l-23 p-r-50">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>


                <!-- Product -->
                <div class="row" id="row">

                    <?php
                    include "connection.php";
                    $query = "SELECT * from product WHERE cat_id = '3'";
                    $rs = mysqli_query($c, $query);
                    ?>


                    <?php
                    while ($row = mysqli_fetch_array($rs)) {
                        ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                            <form method="POST" action="kids.php?action=add&p_id=<?php echo $row[0]; ?>">
                                <article>
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <a href=<?php echo $URL; ?>member-copy/product.php?cat_id=<?php echo $row[0]; ?>>
                                                <img src="<?php echo $URL . $row['image']; ?>"
                                                     style="width:300px;height: 300px;">
                                                <div class="block2-overlay trans-0-4">
                                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                        <i class="icon-wishlist icon_heart dis-none"
                                                           aria-hidden="true"></i>
                                                    </a>
                                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                                        <label style="color:black">Quntity:&nbsp;</label><input
                                                                type="number" name="quntity" value="1"
                                                                style="width: 150px;height: 40px;margin-top: 10px;border-radius: 25px;text-align: center;background-color: lightgray">
                                                        <br><br>
                                                        <input type="hidden" name="hidden_image"
                                                               value="<?php echo $row['image']; ?>">
                                                        <input type="hidden" name="hidden_name"
                                                               value="<?php echo $row['p_name']; ?>">
                                                        <input type="hidden" name="hidden_price"
                                                               value="<?php echo $row['price']; ?>">

                                                        <!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type = "submit" name = "add_to_cart">Add to Cart</button>-->
                                                        <input class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4"
                                                               type="submit" name="add_to_cart" value="Add To Cart">

                                                    </div>
                                                </div>
                                        </div>

                                        <div class="block2-txt p-t-20">
                                            <a href=<?php echo $URL; ?>user/product1.php?cat_id=<?php echo $row['p_id']; ?>><?php echo $row['p_name']; ?></a>
                                            <br>
                                            <span class="block2-price m-text6 p-r-5">
		<?php echo $row['price']; ?>
		</span>
                                        </div>
                                    </div>
                                </article>
                            </form>
                        </div>

                        <?php
                    }
                    ?>
                </div>
                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-t-26">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                </div>
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


<script type="text/javascript">
    $(document).ready(function () {
        setTimeout(popup, 3000);

        function popup() {
            $("#logindiv").css("display", "block");
        }

        $("#login #cancel").click(function () {
            $(this).parent().parent().hide();
        });
</script>

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
</script>

<!--===============================================================================================-->
<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
<script type="text/javascript">
    /*[ No ui ]
    ===========================================================*/
    var filterBar = document.getElementById('filter-bar');

    noUiSlider.create(filterBar, {
        start: [50, 200],
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

    filterBar.noUiSlider.on('update', function (values, handle) {
        skipValues[handle].innerHTML = Math.round(values[handle]);
    });
</script>

<script src="js/main.js"></script>
<script src="js/productload.js"></script>
<script src="js/price.js"></script>
<script src="js/search.js"></script>
<script src="js/price.js"></script>
</body>
</html>
