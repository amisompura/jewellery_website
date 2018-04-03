<?php
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';
include "connection.php";
$output = " ";
$query = "SELECT * from product WHERE subcat_id = '6'";
$rs = mysqli_query($c, $query);

?>

<?php
while ($row = mysqli_fetch_array($rs)) {
    $image = isset($row['image']) ? $URL . $row['image'] : '';
    $output .= '	<
						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50" >
							<!-- Block2 -->
							<article>
							<div class="block2" >
								<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="' . $image . '" style="width:300px;height: 250px;">

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
									<a href="' . $URL . '"guest/product1.php?p_id="' . $row[0] . '" class="block2-name dis-block s-text3 p-b-5">
										' . $row['p_name'] . '
									</a>

									<span class="block2-price m-text6 p-r-5">
										₹' . $row['price'] . '
									</span>
								</div>
							</div>
						</div>

				 	
</article>';

}

echo $output;
exit;
?>
