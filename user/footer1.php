<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">

            <address>
                Visit us at:<br>
                amisompura15@gmail.com<br>
                Box 564, swastic Road<br>
                Ahmedabad,
                Gujarat, India
            </address>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="men.php" class="s-text7">
                        Men
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="women.php" class="s-text7">
                        Women
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="kids.php" class="s-text7">
                        Kids
                    </a>
                </li>


            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Links
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        About Us
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="contact.html" class="s-text7">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form method="POST" action="">
                <div class="effect1 w-size9">
                    <input class="s-text7 bg6 w-full p-b-5" type="email" id="email" name="email"
                           placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" name="submit"
                            value="submit">
                        Subscribe
                    </button>
                </div>
                <?php
                include "connection.php";

                if (isset($_POST["submit"])) {
                    $email = $_POST["email"];

                    $query = "INSERT INTO subscribe (email) VALUES('$email')";
                    $rs = mysqli_query($c, $query);

                    header("loaction:index.php");
                }
                ?>
            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>
        <a href="#">
            <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
        </a>
        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 Online Artificial Jewellery | Designed <i class="fa fa-heart-o" aria-hidden="true"></i> by
            <a href="" target="_blank">Komal Thakkar & Ami Sompura</a>
        </div>

    </div>
</footer>


