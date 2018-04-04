<!-- Slide1 -->
<section class="slide1">
    <div class="wrap-slick1">
        <?php
        $URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery/';
        include "connection.php";

        $q = "select * from banner";
        $rs = mysqli_query($c, $q);
        ?>
        <div class="slick1">

            <?php
            while ($row = mysqli_fetch_array($rs)) {
                $image2 = isset($row['image2']) ? $URL . $row['image2'] : '';
                ?>

                <div class="item-slick1 item1-slick1">
                    <img src="<?php echo $image2; ?>" width="100%" height="90%">
                    <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
                              data-appear="fadeInDown" style="color:red;">
							<?php echo $row["banner_title"]; ?>
						</span>

                        <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
                            data-appear="fadeInUp" style="color: red">
                            <?php echo $row["banner_subtitle"]; ?>
                        </h2>

                        <div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
                            <!-- Button -->
                            <a href="men.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<!--				<div class="item-slick1 item2-slick1" style="background-image: url(images/bn6.jpg);">-->
<!--					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">-->
<!--						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">-->
<!--							Women Collection 2018-->
<!--						</span>-->
<!---->
<!--						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">-->
<!--							New arrivals-->
<!--						</h2>-->
<!---->
<!--						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">-->
<!--							<!-- Button -->
<!--							<a href="women.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">-->
<!--								Shop Now-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!---->
<!--				<div class="item-slick1 item3-slick1" style="background-image: url(images/slide3.jpg);">-->
<!--					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">-->
<!--						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">-->
<!--							Kids Collection 2018-->
<!--						</span>-->
<!---->
<!--						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">-->
<!--							New arrivals-->
<!--						</h2>-->
<!---->
<!--						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">-->
<!--							<!-- Button -->
<!--							<a href="kids.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">-->
<!--								Shop Now-->
<!--							</a>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->

