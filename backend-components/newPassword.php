<?php

// include "emailConnection.php";

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


    
    

// FIXME:email address needs to be taken from emailConnection
$emailAddress = "test@test.com";
// echo $emailAddress;

$newPassword = $_POST['newPassword'];
// echo $newPassword;


// query to update passowrd
$passwordSql = ("UPDATE users SET Password = '$newPassword' WHERE users.Email = '$emailAddress'");

// echo $passwordSql;

$result=$con->query($passwordSql);
// execute query and update values to sql
// if ($con->query($passwordSql)==TRUE){
//         echo "changed pwd";
    
//     }else{
//             echo "failed due to ".$con->error;
//         }
        
//         // $con->close();
        
}
