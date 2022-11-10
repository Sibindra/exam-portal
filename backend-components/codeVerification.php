<?php
    require ("emailConnection.php");

//     $server = "localhost";
// $username = "root";
// $password = "";
// $dB = "Exam-Portal";

// $conn = mysqli_connect($server, $username, $password, $dB);

// if (!$conn) {
//     die("Connect failed:");
// } else {
// }

// $code=1111;
 echo $code;
$to_email=base64_decode($_GET['requestedEmail']);
    // echo $to_email;

    // echo $dB;

    // echo $code;

    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    $d=$_POST['d'];

    $enteredCode= $a.$b.$c.$d;


    if($enteredCode==$code){
        echo "match";
        // echo $to_email;
        header("Location: Password/pw.php?requestedEmail=".base64_encode($to_email));
        exit;
    }else{
        // TODO:
        echo"fail";
    }
?>