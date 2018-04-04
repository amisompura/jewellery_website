
<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                GET IN TOUCH
            </h4>

            <div>
                <p class="s-text7 w-size27">
                    Any questions?<br> Let us know in store at 8th floor, 379 House St,<br> Ahmedabad, Gujarat<br> or
                    call us on (+91) 96 716 6879
                </p>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Categories
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="men.php" class="s-text7">
                        Men Jewellery
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="women.php" class="s-text7">
                        Women Jewellery
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="kids.php" class="s-text7">
                        Kids Jewellery
                    </a>
                </li>

            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Newsletter
            </h4>

            <form method="post" action="" enctype="multipart/form-data" class="leave-comment" name="submit">
                <div class="effect1 w-size9">
                    <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name"
                           style="background-color: lightgrey;color: black">
                    <br>
                    <input class="form-control" type="text" id="email" name="email" placeholder="email@example.com"
                           style="background-color: lightgrey;color: black">

                </div>

                <div class="w-size2 p-t-20">
                    <input type="submit" name="insert" value=" Subscribe"
                           class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">
                </div>

            </form>
        </div>
    </div>
    <div class="t-center p-l-15 p-r-15">
        <div class="t-center s-text8 p-t-20">
            Copyright © 2018 All rights reserved. | Online Artificial Jewellery Website <i class="fa fa-heart-o"
                                                                                           aria-hidden="true"></i>Made
            by <a href="https://colorlib.com" target="_blank">Ami Sompura & Komal Thakkar</a>
        </div>
    </div>
    <?php

    include "connection.php";

    if (isset($_POST["insert"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];

        $q = "INSERT INTO subscribe (name , email) VALUES ('$name','$email')";
        $rs = mysqli_query($c, $q);

        header("location: index.php");
    }
    ?>



</footer>

<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection -->
<div id="dropDownSelect1"></div>
<div id="dropDownSelect2"></div>

<script>$('#form-signin_v1').validate();</script>
<!--===============================================================================================-->
<!-- <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
<script type="text/javascript">
    // Wait for the DOM to be ready
    $(function () {

        $("form[name='submit']").validate({

            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                }
            },
            // Specify validation error messages
            messages: {
                name: "Please enter your name",
                email: "Please enter a valid email address"
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>
<!--===============================================================================================-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

