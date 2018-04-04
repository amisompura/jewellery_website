<!-- <?php
session_start();
$URL = "http://" . $_SERVER['HTTP_HOST'] . '/jewellery1/';
include "connection.php";

if (isset($_POST["addToProduct"])) {
    $p_id = $_POST["p_id"];
    //$user_id = $_SESSION["user_id"];

    $sql = "SELECT * FROM cart WHERE p_id='$p_id' ";
    $result = mysqli_query($c, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        echo "Product already added into the cart continue shopping shopping..";
    } else {

        $sql = "SELECT * FROM product WHERE p_id = '$p_id'";
        $res = mysqli_query($c, $sql);
        $row = mysqli_fetch_array($res);
        $row['p_id'];
        $row['p_name'];
        $row['image'];
        $row['price'];

        $sql = "INSERT INTO cart (cart_id,user_id,p_id,p_name,image,qty,price,total_amt) VALUES ('$cart_id','$user_id','$p_id','$p_name','$image','$qty','$price','$total_amt')";
        if (mysqli_query($c, $sql)) {
            echo "product is added...";
        }

    }


}
?> -->