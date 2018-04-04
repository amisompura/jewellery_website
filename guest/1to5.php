<?php
session_start();
?>
    <!DOCTYPE html>
    <!--[if IE 8]>
    <html class="ie8 oldie" lang="en"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Diana’s jewelry</title>
        <meta name="viewport"
              content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
        <link rel="stylesheet" media="all" href="css/style.css">

        <link href="komal/css/style1.css" rel="stylesheet"/>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" media="all" href="css/search.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#myInput").on("keyup", function () {
                    var value = $(this).val().toLowerCase();
                    $("#products article").filter(function () {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });

        </script>
    </head>
<body>
<?php
include "header.php";
?>
    <nav id="menu">
        <div class="container">
            <div class="trigger"></div>
            <ul>
                <li><a href="index.php">Home</a></li>

                <li><a href="men.php">Men</a></li>
                <li><a href="Women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>

                <li><a href="login.php">Login</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
        <!-- / container -->
    </nav>
    <!-- / navigation -->

    <div id="breadcrumbs">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="men.php">Men</li>
            </ul>
        </div>
        <!-- / container -->
    </div>
    <!-- / body -->
<div id="body">
    <div class="container">
        <div class="pagination">
            <ul>
                <li><a href="#"><span class="ico-prev"></span></a></li>
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><span class="ico-next"></span></a></li>
            </ul>
        </div>
        <input id="myInput" type="text" placeholder="Search..">
        <div class="products-wrap">
            <aside id="sidebar">
                <div class="widget">
                    <h3>SubCategory:</h3>
                    <fieldset>
                        <input checked type="checkbox">
                        <label><a href="menring.php" style="text-decoration: none; color:silver;">RING</a></label>
                        <input type="checkbox">
                        <label><a href="menchain.php" style="text-decoration: none; color:silver;">CHAIN</a></label>
                        <input type="checkbox">
                        <label><a href="menpendant.php"
                                  style="text-decoration: none; color:silver;">PENDANTS</a></label>
                        <input type="checkbox">
                        <label><a href="menbracelate.php"
                                  style="text-decoration: none; color:silver;">BRACELATE</a></label>
                    </fieldset>
                </div>
                <div class="widget">
                    <h3>Sort by Price:</h3>
                    <fieldset>
                        <input checked type="checkbox">
                        <label><a href="#" style="text-decoration: none; color:silver;">Rs.100-500</a></label>
                        <input type="checkbox">
                        <label><a href="6to10.php" style="text-decoration: none; color:silver;">Rs.600-1000</a></label>
                        <input type="checkbox">
                        <label><a href="10to15.php"
                                  style="text-decoration: none; color:silver;">RS.1000-1500</a></label>
                        <input type="checkbox">
                        <label><a href="15to20.php"
                                  style="text-decoration: none; color:silver;">RS.1500-2000</a></label>
                        <input type="checkbox">
                        <label><a href="20to25.php"
                                  style="text-decoration: none; color:silver;">RS.2000-2500</a></label>
                        <input type="checkbox">
                        <label><a href="25to30.php"
                                  style="text-decoration: none; color:silver;">RS.2500-3000</a></label>
                    </fieldset>
                </div>

            </aside>
            <div id="content">
                <?php
                include "connection.php";


                //$subcat_id=$_GET["subcat_id"];

                $q = "select * from category ";

                $rs = mysqli_query($c, $q);
                ?>
                <?php
                while ($row = mysqli_fetch_row($rs)) {
                    $qa = "select * from product WHERE (price between 100 and 500) and cat_id in (1)";
                    $rs1 = mysqli_query($c, $qa);
                }
                ?>
                <section class="products" id="products">
                    <h1> Latest Products</h1>

                    <?php
                    while ($row1 = mysqli_fetch_row($rs1)) {
                        ?>
                        <article>
                            <a href=<?php echo $URL; ?>komal/product.php?cat_id=<?php echo $row1[0]; ?>>
                                <img src="<?php echo $URL . $row1[10]; ?>" style="width:194px; height:194px;">
                                <h3><?php echo $row1[1]; ?></h3>
                                <h4>₹<?php echo $row1[5]; ?></h4>
                                <a href=cart.html class=btn-add>Add to cart</a>
                        </article>
                        <?php
                    }
                    ?>
                </section>
                <!--<article>
                    <a href="product.html"><img src="images/11.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$990.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/12.jpg" alt=""></a>
                    <h3><a href="product.html">cupidatat non proident</a></h3>
                    <h4><a href="product.html">$1 200.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/13.jpg" alt=""></a>
                    <h3><a href="product.html">Duis aute irure</a></h3>
                    <h4><a href="product.html">$2 650.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/14.jpg" alt=""></a>
                    <h3><a href="product.html">magna aliqua</a></h3>
                    <h4><a href="product.html">$3 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/15.jpg" alt=""></a>
                    <h3><a href="product.html">Lorem ipsum dolor</a></h3>
                    <h4><a href="product.html">$1 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/1.jpg" alt=""></a>
                    <h3><a href="product.html">cupidatat non proident</a></h3>
                    <h4><a href="product.html">$3 200.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/16.jpg" alt=""></a>
                    <h3><a href="product.html">Duis aute irure</a></h3>
                    <h4><a href="product.html">$2 650.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
                <article>
                    <a href="product.html"><img src="images/17.jpg" alt=""></a>
                    <h3><a href="product.html">magna aliqua</a></h3>
                    <h4><a href="product.html">$3 500.00</a></h4>
                    <a href="cart.html" class="btn-add">Add to cart</a>
                </article>
            </section>
        </div>
        <!-- / content -->
            </div>


        </div>
        <!-- / container -->
    </div>
    <!-- / body -->
<?php
include "footer.php";
?>