<?php
// connecting to backend
$server = "localhost";
$username = "root";
$password = "";
$dB = "testdB";

$con = mysqli_connect($server, $username, $password, $dB);

if (!$con) {
    die("Connect failed: %s\n". $conn -> error);
} else {
    echo "Sucess";
}
