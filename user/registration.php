<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Holiday - templatemo</title>
    <!--
    Holiday Template
    http://www.templatemo.com/tm-475-holiday
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet'
          type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
    include "a1.php";
    ?>
</head>
<body class="tm-gray-bg">
<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="#"><img src="img/city1.png" style="margin-right:4%;" height="50"></a>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="aboutcity.php">About City</a></li>
                        <li><a href="category.php">Choose Category</a></li>
                        <li><a href="registration.php" class="active">Registration</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="feedback.php">Feedback</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- gray bg -->
<section class="container tm-home-section-1" id="more">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6">
            <!-- Nav tabs -->
            <div class="tm-home-box-1">
                <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                    <li role="presentation" class="active">
                        <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Hotel</a>
                    </li>
                    <li role="presentation">
                        <a href="#car" aria-controls="car" role="tab" data-toggle="tab">Car Rental</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                        <div class="tm-search-box effect2">
                            <form action="property1.php" method=post class="hotel-search-form">
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select class="form-control" name=cid>
                                            <option value="">-- Select Category --</option>
                                            <?php

                                            $c = mysql_connect("localhost", "root", "");
                                            mysql_select_db("city1");

                                            $q = "select * from category";

                                            $rs = mysql_query($q);
                                            while ($row = mysql_fetch_row($rs)) {

                                                echo "<option value=" . $row[0] . ">" . $row[1] . " </option>";

                                            }

                                            ?>


                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type='text' name="cname" size=35 class="form-control"
                                                   placeholder="Enter keyword"/>

                                        </div>
                                    </div>


                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="search" class="tm-yellow-btn">Check Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
                        <div class="tm-search-box effect2">
                            <form action="#" method="post" class="hotel-search-form">
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Select Model --</option>
                                            <option value="shangrila">BMW</option>
                                            <option value="chatrium">Mercedes-Benz</option>
                                            <option value="fourseasons">Toyota</option>
                                            <option value="hilton">Honda</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker3'>
                                            <input type='text' class="form-control" placeholder="Pickup Date"/>
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker4'>
                                            <input type='text' class="form-control" placeholder="Return Date"/>
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Options --</option>
                                            <option value="">Child Seat</option>
                                            <option value="">GPS Navigator</option>
                                            <option value="">Insurance</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="submit" class="tm-yellow-btn">Check Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <form method="post" action="registration.php">

            <table style="margin-top:10%;margin-left:10%;">
                <tr>
                    <td colspan=2 class="tm-submit-btn" style="font-size:23px;">
                        <center> Registartion</center>

                    </td>
                </tr>
                <tr>
                    <td colspan=2>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="mname" onblur="alp(this)" placeholder="Member Name" required/>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" name="oname" onblur="alp(this)" placeholder="Owner Name" required/>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td><input type="text" name="city" onblur="clearText(this)" placeholder="City" required/>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Gender:
                        <input type="radio" name="gender"/>Male
                        <input type="radio" name="gender"/>FeMale
                        <br><br>
                    </td>
                </tr>

                <tr>
                    <td><input type="text" name="state" placeholder="State" required/>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" name="country" placeholder="Country" required/><br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact" onblur="a1(this)" placeholder="Contact" required/>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" name="uname" onblur="an(this)" placeholder="User Name" required/><br><br>


                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="Password" onblur="ps(this,8,14)" placeholder="Password" required/>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" name="email" onblur="em(this)" placeholder="Email"> <br><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="security" placeholder="Security" required style="width:180px;height:30px;"/>
                        <option>Which is fav book?</option>
                        <option>Which is chilhood friend?</option>
                        </select>
                        &nbsp;&nbsp;&nbsp;
                        <input type="text" name="answer" placeholder="Answer" required/><br><br>
                    </td>
                </tr>


                <tr>
                    <td>
                        <textarea cols="20" rows="3" name="address" id="message" placeholder="Address"
                                  style="width:500px;"></textarea>
                        <br><br>

                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="tm-submit-btn" type="submit" name="submit" style="font-size:13px;">Submit
                        </button>
                    </td>
                </tr>


            </table>
        </form>
</section>


<?php

error_reporting(E_ERROR);
$mid = $_POST["mid"];
$mname = $_POST["mname"];
$oname = $_POST["oname"];
$gender = $_POST["gender"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$city = $_POST["city"];
$state = $_POST["state"];
$country = $_POST["country"];
$uname = $_POST["uname"];
$password = $_POST["password"];
$email = $_POST["email"];
$security = $_POST["security"];
$answer = $_POST["answer"];

if (isset($_POST["submit"])) {
    $c = mysql_connect("localhost", "root", "");
    mysql_select_db("city");

    $q = "insert into member values('$mid','$mname','$oname','$gender','$address','$contact','$city','$state','$country','$uname','$password','$email','$security','$answer')";

    mysql_query($q);

}


/*if(isset($_GET["search"]))
             {
               $c=mysql_connect("localhost","root","");
                 mysql_select_db("city");

		$s1=$_GET["cid"];
                $q="select * from property where cid='$s1'";
echo $q;
              $rs=mysql_query($s);
while($row=mysql_fetch_row($rs))
{

				echo "<div class='col-lg-6'>
					<div class='tm-home-box-3'>
						<div class='tm-home-box-3-img-container'>
							<a href=property.php?cid=".$row[0]."&cname=".$row[1]."><img src=../".$row[3]." alt='image' style='border-width:1px;' height='230' width='200'></a>	
						</div>					
						<div class='tm-home-box-3-info'>
							<p class='tm-home-box-3-description'>".$row[2]."</p>
					        <div class='tm-home-box-2-container'>
							<a href='' class='tm-home-box-2-link'><i class='fa fa-heart tm-home-box-2-icon border-right'></i></a>
							<a href='' class='tm-home-box-2-link'><span class='tm-home-box-2-description box-3'>".$row[1]."</span></a>
							<a href='' class='tm-home-box-2-link'><i class='fa fa-edit tm-home-box-2-icon border-left'></i></a>
						</div>
						</div>						
					</div>					
			     </div>";
			     
			
}

}*/
?>

</div>
</section>

</body>
</div>
</div>
</div>

<?php

include "footercopy.php";
?>


</html>