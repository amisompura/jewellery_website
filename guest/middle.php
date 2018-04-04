<!-- New Product -->			
<?php
include "connection.php";
$query = "select * from category";
$rs = mysqli_query($c, $query);
while ($row = mysqli_fetch_row($rs)) {

    $query1 = "select * from product WHERE cat_id = '" . $row[0] . "' ";
    $rs1 = mysqli_query($c, $query1);
    ?>
    <section class="newproduct bgwhite p-t-45 p-b-105">
        <div class="container">
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Product For <?php echo $row[1]; ?>
                </h3>
            </div>
            <!-- Slide2 -->
            <div class="wrap-slick2">
                <div class="slick2">
                    <?php
                    while ($row1 = mysqli_fetch_row($rs1)) {
                        ?>
                        <div class="item-slick2 p-l-15 p-r-15">
                            <!-- Block2 -->
                            <div class="block2">
                                <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
                                    <a href=<?php echo $URL; ?>member/product.php?cat_id=<?php echo $row1[0]; ?>><img
                                                src="<?php echo $URL . $row1[10]; ?>"
                                                style="width: 300px;height: 300px">

                                        <div class="block2-overlay trans-0-4">
                                            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>

                                            </a>

                                            <div class="block2-btn-addcart w-size1 trans-0-4">
                                                <!-- Button -->
                                                <button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                                    Add to Cart
                                                </button>
                                            </div>
                                        </div>
                                </div>

                                <div class="block2-txt p-t-20">
                                    <a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
                                        <?php echo $row1[1]; ?>
                                    </a>

                                    <span class="block2-price m-text6 p-r-5">
									<?php echo $row1[5]; ?>
								</span>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    </section>
    <?php
}
?>

<!--<div class="item-slick2 p-l-15 p-r-15">
    <!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative">
        <!--<img src="images/item-03.jpg" alt="IMG-PRODUCT">-->
<!--<a href=<?php echo $URL; ?>member/product.php?cat_id=<?php echo $row1[0]; ?>><img src="<?php echo $URL . $row1[10]; ?>">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>
<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">

</a>

<span class="block2-price m-text6 p-r-5">

</span>
</div>
</div>
</div>-->


<!--<div class="item-slick2 p-l-15 p-r-15">
    <!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative">
        <img src="images/item-05.jpg" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Coach slim easton black
</a>

<span class="block2-price m-text6 p-r-5">
$165.90
</span>
</div>
</div>
</div>

<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
        <img src="images/item-07.jpg" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Frayed denim shorts
</a>

<span class="block2-oldprice m-text7 p-r-5">
$29.50
</span>

<span class="block2-newprice m-text8 p-r-5">
$15.90
</span>
</div>
</div>
</div>

<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<!--	<div class="block2">
        <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
            <img src="images/item-02.jpg" alt="IMG-PRODUCT">

            <div class="block2-overlay trans-0-4">
                <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                    <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                    <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                </a>

                <div class="block2-btn-addcart w-size1 trans-0-4">
                    <!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Herschel supply co 25l
</a>

<span class="block2-price m-text6 p-r-5">
$75.00
</span>
</div>
</div>
</div>

<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative">
        <img src="images/item-03.jpg" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Denim jacket blue
</a>

<span class="block2-price m-text6 p-r-5">
$92.50
</span>
</div>
</div>
</div>

<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative">
        <img src="images/item-05.jpg" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
<!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
    Add to Cart
</button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Coach slim easton black
</a>

<span class="block2-price m-text6 p-r-5">
$165.90
</span>
</div>
</div>
</div>

<div class="item-slick2 p-l-15 p-r-15">
<!-- Block2 -->
<!--<div class="block2">
    <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale">
        <img src="images/item-07.jpg" alt="IMG-PRODUCT">

        <div class="block2-overlay trans-0-4">
            <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
            </a>

            <div class="block2-btn-addcart w-size1 trans-0-4">
                <!-- Button -->
<!--	<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
        Add to Cart
    </button>
</div>
</div>
</div>

<div class="block2-txt p-t-20">
<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
Frayed denim shorts
</a>

<span class="block2-oldprice m-text7 p-r-5">
$29.50
</span>

<span class="block2-newprice m-text8 p-r-5">
$15.90
</span>
</div>
</div>
</div>
</div>
</div>

</div>
</section>
