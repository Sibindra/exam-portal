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
    // echo "Sucess";


    // variables
    $email = $_POST['email'];
    $password = $_POST['password'];




    // echo $email;

    $sql = ("SELECT * FROM users WHERE email='$email' AND password='$password'");

    // executing query
    $results = mysqli_query($con, $sql);

    // number of results of sql 
    $num = mysqli_num_rows($results);

    // echo $num;

    // if atleast 1  the present
    if ($num > 0) {

        // code for match found
        echo "MATCH FOUND";
    } else {

        // code for match not found
        echo "NO MATCH";
    }

}

?>