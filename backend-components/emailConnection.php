<?php
// session start
session_start();

// connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$conn = mysqli_connect($server, $username, $password, $dB);

if (!$conn) {
    die("Connect failed:");
} else {
    // echo "sucess";
    // FIXME: code to geneate random no 
    $code=1111;
    
    $to_email = $_POST['newEmail'];
    // $to_email="test@test.com";

    $_SESSION['emailAddress']=$dB;
    // echo $to_email;
}
    // echo $to_email;

    // generate 4 digit code
    // FIXME: mt_rand generaes new valie everytime it is called
    // static $code = mt_rand(1111,9999);
