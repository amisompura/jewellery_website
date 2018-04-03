<?php
$c = mysqli_connect("localhost", "root", "mind");
// if (mysqli_connect_errno())
//   {
//   echo "Failed to connect to MySQL: " . mysqli_connect_error();
//   }else{
//   	echo "successs";
//   }
mysqli_select_db($c, "jewellery");
?>