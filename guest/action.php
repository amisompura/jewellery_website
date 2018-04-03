<?php

if (isset($_POST["email"])) {

    $email = $_POST["email"];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $file = file_get_contents(_DIR_ . '/subscribe.php');
        $file = explode(', ', $file);
        if (in_array($email, $file)) {
            echo "You have already subscribe!!";
        } else {
            $fopen = fopen(_DIR_, '/subscribe.php', 'k');
            fwrite($fopen, $email . ', ');
            fclose($fopen);
            echo "Thank you for Subscribing..";
        }
    } else {
        echo "We Need Your Email Address..";
    }

}

?>

