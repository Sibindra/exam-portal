<?php

// connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$con = mysqli_connect($server, $username, $password, $dB);

if (!$con) {
    die("Connect failed:");
} else {
    echo "Sucess";

}


    $email=$_POST['email'];

    echo $email;
?>