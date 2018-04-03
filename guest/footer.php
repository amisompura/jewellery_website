<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions? You can contact with us.<br>
                    Call us on (+91) 96 716 68799
                </p>

                <!--<div class="flex-m p-t-30">
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-snapchat-ghost"></a>
                    <a href="#" class="fs-18 color1 p-r-20 fa fa-youtube-play"></a>
                </div>-->
            </div>
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
                <!--<li class="p-b-9">
                    <a href="#" class="s-text7">
                        Search
                    </a>
                </li>-->
                <!---->
                <!--					<li class="p-b-9">-->
                <!--						<a href="#" class="s-text7">-->
                <!--							About Us-->
                <!--						</a>-->
                <!--					</li>-->

                <li class="p-b-9">
                    <a href="contact.html" class="s-text7">
                        Contact Us
                    </a>
                </li>

                <!--<li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>-->
            </ul>
        </div>

        <!--<div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Help
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Track Order
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Returns
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Shipping
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        FAQs
                    </a>
                </li>
            </ul>
        </div>-->

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form id="subscribe">
                <div class="effect1 w-size9">


                    <input class="s-text7 bg6 w-full p-b-5" type="email" name="email" id="email"
                           required placeholder="email@example.com">
                    <span class="effect1-line"></span>
                </div>

                <div class="w-size2 p-t-20">
                    <!-- Button -->
                    <button class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" type="submit" id="submit"
                            onclick="sub();">
                        Subscribe
                    </button>
                    <div id="result" style="margin-top: 50px;">
                    </div>
                    <script src="http://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
                    <script>
                        function sub() {
                            $("#subscribe").validate({

                                rules: {
                                    required: true,
                                    email: true
                                }
                                messages: {
                                    required: "*We Need Your Email Address"
                                }
                            });
                        }
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {

                            $('#email').keypress(function (event) {

                                var email = $('#email').val();
                                var keyCode = event.keyCode;
                                if (keyCode == 13) {

                                    $.ajax({
                                        type: 'post',
                                        url: 'action.php',
                                        data: {email: email},
                                        success: function (data) {
                                            $('#result').hide();
                                            $('#result').html(data);
                                            $('#result').fadeIn();


                                        }

                                    });
                                }
                                ;
                            });
                            $('#submit').click(function () {
                                var email = $('#email').val();
                                var keyCode = event.keyCode;

                                $.ajax({
                                    type: 'post',
                                    url: 'action.php',
                                    data: {email: email},
                                    success: function (data) {
                                        $('#result').hide();
                                        $('#result').html(data);
                                        $('#result').fadeIn();
                                    }
                                });

                            })
                        });
                    </script>
                </div>

            </form>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <!--<a href="#">
            <img class="h-size2" src="images/icons/visa.png" alt="IMG-VISA">
        </a>-->

        <!--<a href="#">
            <img class="h-size2" src="images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>-->

        <a href="#">
            <img class="h-size2" src="images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <!--<a href="#">
            <img class="h-size2" src="images/icons/discover.png" alt="IMG-DISCOVER">
        </a>-->

        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o"
                                                                                  aria-hidden="true"></i> by <a
                    href="https://colorlib.com" target="_blank">Thakkar Koaml & Sompura Ami</a>
        </div>
    </div>
</footer>


