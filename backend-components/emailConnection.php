<?php
// session start
// session_start();

// connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$conn = mysqli_connect($server, $username, $password, $dB);

if (!$conn) {
    die("Connect failed:");
} else {
    // FIXME: code to geneate random no 
    // $code=1111;
}

   
    // $code=mt_rand(1111,9999);
    // $code=1111;

    // echo $code ."<br>";

    // $code2=$code;

    // echo $code2;
    // echo $randomCode . "<br>";

    // $code=$randomCode;

    // echo $randomCode;
    
    $to_email = $_POST['newEmail'];

    // echo $to_email;
    // generate 4 digit code
    // FIXME: mt_rand generaes new valie everytime it is called
    // static $code = mt_rand(1111,9999);
