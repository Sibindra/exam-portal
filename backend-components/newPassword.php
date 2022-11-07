<?php

    include ("emailConnection.php");

    echo $to_email;
    // echo "works";


    $newPassword=$_POST['newPassword'];

    // echo $newPassword;

    // query to take password
    $getPassword=("SELECT Password FROM users WHERE email='$to_email'");

    echo $getPassword;

    // query to replace password
    // $sql = ("SELECT * FROM users WHERE email='$email' AND password='$password'");
?>