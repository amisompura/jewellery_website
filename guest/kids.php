<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <title>Product</title>
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
    <link rel="stylesheet" type="text/css" href="css/search.css">
    <link rel="stylesheet" media="all" href="css/range.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--===============================================================================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="animsition">

<?php
include "header.php";

?>
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/kidsbanner1.jpg);">
    <h2 class="l-text2 t-center">

    </h2>
    <p class="m-text13 t-center">

    </p>
</section>


<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text23 p-t-56 p-b-34">
                        Categories
                    </h4>

                    <ul class="p-b-54">
                        <li class="p-t-4">
                            <a href="kids.php" class="s-text13 active1">
                                All
                            </a>
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsneack();">Necklace</button>
                            <!-- <a href="kidsnecklace.php" class="s-text13">
                                Necklace
                            </a> -->
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsearring();">Earrings</button>
                            <!-- <a href="kidsearrings.php" class="s-text13">
                                Earrings
                            </a> -->
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsring();">Rings</button>

                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidsbraclete();">Braclete</button>
                            <!-- <a href="kidsbraclet.php" class="s-text13">
                                Braclete
                            </a> -->
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidschain();">Chain</button>
                            <!-- <a href="kidschain.php" class="s-text13">
                                Chain
                            </a> -->
                        </li>

                        <li class="p-t-4">
                            <button class="s-text13" onclick="loadkidspendal();">Pendant</button>
                            <!-- <a href="kidspendal.php" class="s-text13">
                                Pendals
                            </a> -->
                        </li>
                    </ul>

                    <!--  -->
                    <h4 class="m-text23 p-t-56 p-b-34">
                        Filters
                    </h4>

                    <div class="filter-price p-t-22 p-b-50 bo3">
                        <div class="m-text15 p-b-17">
                            Price
                        </div>

                        <div class="wra-filter-bar">
                            <input type="range" min="0" max="4000" value="10000"
                                   id="min_price" name="min_price" class="slider"/>
                            <!-- <div id="filter-bar"></div> -->
                        </div>

                        <div class="flex-sb-m flex-w p-t-16">
                            <div class="w-size11">
                                <!-- Button -->
                                <!-- <button class="flex-c-m size4 bg7 bo-rad-15 hov1 s-text14 trans-0-4">
                                    Filter
                                </button> -->
                            </div>

                            <div class="s-text3 p-t-10 p-b-10" id="price_range"
                                 style="font-size: 17px;font-family: 'FranchiseRegular', 'Arial Narrow', Arial, sans-serif;color:#0b2e13 ">
                                <!-- Range: $<span id="value-lower">610</span> - $<span id="value-upper">980</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="filter-color p-t-22 p-b-50 bo3">
                        <div class="m-text23 p-t-56 p-b-34">
                            Default Sorting
                        </div>


                        <!--                        <input type="checkbox"  id="checkbox1" class="s-text13" onchange="showPopularity(this.value)" />&nbsp;&nbsp;Popularity <br>-->
                        <input type="checkbox" id="checkbox2" class="s-text13" onchange="showlowtohigh(this.value)"
                               style="font-size: 17px;font-family: 'FranchiseRegular', 'Arial Narrow', Arial, sans-serif;color:#0b2e13 "/>&nbsp;&nbsp;Price:
                        low to high <br>
                        <input type="checkbox" id="checkbox1" class="s-text13" onchange="showhightolow(this.value)"
                               style="font-size: 17px;font-family: 'FranchiseRegular', 'Arial Narrow', Arial, sans-serif;color:#0b2e13 "/>&nbsp;&nbsp;Price:
                        high to low <br>

                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!--  -->
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 bo4 of-hidden">
                            <!-- <select class="selection-2" name="sorting">
                                <option>Default Sorting</option>
                                <option>Popularity</option>
                                <option>Price: low to high</option>
                                <option>Price: high to low</option>
                            </select> -->
                        </div>

                        <div class="rs2-select2 bo4 of-hidden ">
                            <!-- <select class="selection-2" name="sorting">
                                <option>Price</option>
                                <option>$0.00 - $50.00</option>
                                <option>$50.00 - $100.00</option>
                                <option>$100.00 - $150.00</option>
                                <option>$150.00 - $200.00</option>
                                <option>$200.00+</option>

                            </select> -->
                        </div>
                    </div>
                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="selection-2" type="text" name="search-product" id="search-product"
                               placeholder="Search Products...">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!--<span class="s-text8 p-t-5 p-b-5">
                        Showing 1–12 of 16 results
                    </span>-->
                </div>

                <!-- Product -->
                <div class="row" id="block2">
                    <?php
                    include "connection.php";

                    $q = "select * from category";
                    $rs = mysqli_query($c, $q);
                    ?>
                    <?php
                    $query = "select * from product WHERE cat_id = '3'";
                    $rs1 = mysqli_query($c, $query);

                    ?>
                    <div class="row">
                        <?php
                        while ($row1 = mysqli_fetch_array($rs1)) {
                            ?>
                            <input type="hidden" name="cat_id" id="cat_id" value="<?php echo $row1['cat_id']; ?>">
                            <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                                <!-- Block2 -->
                                <article>
                                    <div class="block2">
                                        <div class="block2-img wrap-pic-w of-hidden pos-relative">
                                            <form method="POST"
                                                  action="kids.php?action=add&p_id=<?php echo $row1[0]; ?>"/>
                                            <img src="<?php echo $URL . $row1['image']; ?>"
                                                 style="width:300px;height: 250px;"></a>

                                            <div class="block2-overlay trans-0-4">
                                                <button type="button"
                                                        class="block2-btn-addwishlist hov-pointer trans-0-4"
                                                        name="heart">
                                                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"
                                                       id="icon_heart"></i>

                                                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                                    </a>
                                                </button>

                                                <div class="block2-btn-addcart w-size1 trans-0-4">

                                                    <label style="color:white">Quntity:&nbsp;&nbsp;</label><input
                                                            type="number" name="quntity" value="1"
                                                            style="width: 150px;height: 40px;margin-top: 10px;border-radius: 25px;text-align: center;background-color: lightgray">
                                                    <br><br>
                                                    <input type="hidden" name="hidden_uid"
                                                           value="<?php echo $row1['user_id']; ?>">
                                                    <input type="hidden" name="hidden_image"
                                                           value="<?php echo $row1['image']; ?>">
                                                    <input type="hidden" name="hidden_name"
                                                           value="<?php echo $row1['p_name']; ?>">
                                                    <input type="hidden" name="hidden_price"
                                                           value="<?php echo $row1['price']; ?>">
                                                    <input type="hidden" name="hidden_total"
                                                           value="<?php echo $row1['total_amt']; ?>">
                                                    <!-- Button -->

                                                    <input type="submit" name="add_to_cart"
                                                           value="AddToCart"
                                                           class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">

                                                </div>
                                            </div>
                                        </div>

                                        <form method="POST" action="men.php">
                                            <div class="block2-txt p-t-20" id="product">
                                                <a href="<?php echo $URL; ?>guest/product1.php?cat_id=<?php echo $row1[0]; ?>"
                                                   class="block2-name dis-block s-text3 p-b-5">
                                                    <?php echo $row1['p_name']; ?></a>
                                                </a>
                                                <br>
                                                <span class="block2-price m-text6 p-r-5">
										Rs&nbsp;<?php echo $row1['price']; ?>
									</span>
                                            </div>
                                        </form>
                                    </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
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

            swal(nameProduct, "is added to wishlist !", "success");
        }

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
<!--===============================================================================================-->
<script src="js/main.js"></script>
<script src="js/productload.js"></script>
<script src="js/search.js"></script>
<script src="js/main3.js"></script>
<script src="js/kidsprice.js"></script>
</body>
</html>