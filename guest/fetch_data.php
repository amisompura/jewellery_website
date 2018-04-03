<?php
if (isset($_POST['get_option'])) {
    include "connection.php";

    $state = $_POST['get_option'];
    $find = mysqli_query("select city_name from city where state='$state'");
    while ($row = mysqli_fetch_array($find)) {
        echo "<option>" . $row['city'] . "</option>";
    }
    exit;
}
?>