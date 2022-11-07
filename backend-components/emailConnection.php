<?php
// connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$conn = mysqli_connect($server, $username, $password, $dB);

if (!$conn) {
    die("Connect failed:");
} else {

}


    $to_email=$_POST['email'];

    // echo $to_email;

    // generate 4 digit code
    // FIXME: mt_rand generaes new valie everytime it is called
    // $code = mt_rand(1111,9999);
    $code=1111;


?>
