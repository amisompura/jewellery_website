<!-- Product -->

<?php
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';

include "connection.php";

$query = "SELECT * from product WHERE subcat_id = '9'";
$rs = mysqli_query($c, $query);
?>

<?php
while ($row = mysqli_fetch_array($rs)) {
    ?>
    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
        <form method="POST" action="men.php?action=add&p_id=<?php echo $row[0]; ?>">
            <!-- Block2 -->
            <div class="block2">
                <div class="block2-img wrap-pic-w of-hidden pos-relative">
                    <img src="<?php echo $URL . $row['image']; ?>" style="width:300px;height: 300px"></a>

                    <div class="block2-overlay trans-0-4">
                        <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                            <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                            <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                        </a>

                        <div class="block2-btn-addcart w-size1 trans-0-4">
                            <!-- Button -->
                            <label style="color:white">Quntity:&nbsp;&nbsp;</label><input type="number" name="quntity"
                                                                                          value="1"
                                                                                          style="width: 150px;height: 40px;margin-top: 10px;border-radius: 25px;text-align: center;background-color: lightgray">
                            <br><br>
                            <input type="hidden" name="hidden_image" value="<?php echo $row['image']; ?>">
                            <input type="hidden" name="hidden_name" value="<?php echo $row['p_name']; ?>">
                            <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>">

                            <!--<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type = "submit" name = "add_to_cart">Add to Cart</button>-->
                            <input class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" type="submit"
                                   name="add_to_cart" value="Add To Cart">

                        </div>
                    </div>
                </div>

                <form method="POST" action="menring.php">
                    <div class="block2-txt p-t-20">
                        <!--<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">-->

                        <a href=<?php echo $URL; ?>user/product1.php?cat_id=<?php echo $row[0]; ?>><?php echo $row[1]; ?></a>


                        <br>
                        <span class="block2-price m-text6 p-r-5">
										<?php echo $row['price']; ?>
									</span>
                    </div>
                </form>
            </div>
    </div>
    <?php
}
?>
</div>
	