<!DOCTYPE html>
<html lang="en">
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->

</head>
<body class="animsition">

<?php

include "header.php";
?>

<?php
include "connection.php";


$q = "select order_id,p_id,quantity from order_detail";
$rs = mysqli_query($c, $q);

while ($row = mysqli_fetch_array($rs)) {


    ?>

    <?php echo $row['order_id']; ?>
    <?php echo $row['p_id']; ?>
    <?php echo $row['quantity']; ?>

    <?php

}
?>

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
