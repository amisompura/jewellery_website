<!-- Product -->

<?php
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';
include "connection.php";

$query = "SELECT * from product WHERE (price BETWEEN 1000 AND 2000) AND cat_id IN (1) ";

$rs = mysqli_query($c, $query);


?>

<?php
while ($row = mysqli_fetch_row($rs)) {


    ?>
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <!-- Block2 -->
        <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                <a href=<?php echo $URL; ?>member-copy/product.php?cat_id=<?php echo $row[0]; ?>>
                    <img src="<?php echo $URL . $row[10]; ?>" style="width:300px;height: 300px;">

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
                <a href=<?php echo $URL; ?>user/product1.php?cat_id=<?php echo $row[0]; ?>><?php echo $row[1]; ?></a>
                <br>

                <span class="block2-price m-text6 p-r-5">
										<?php echo $row[5]; ?>
									</span>
            </div>
        </div>
    </div>


    <?php
}
?>
</div>
	