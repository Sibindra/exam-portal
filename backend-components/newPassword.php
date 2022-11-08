<?php

require "./emailConnection.php";
// session_start();

echo $dB;
echo $to_email;
// echo $_SESSION['to_email'];

// session_start();

// // connection to localhost

// $server = "localhost";
// $username = "root";
// $password = "";
// $dB = "Exam-Portal";

// $connection = mysqli_connect($server, $username, $password, $dB);

// if (!$conn) {
//     die("Connect failed:");
// } else {
// echo "sucess";





// FIXME:email address needs to be taken from emailConnection;
// echo $to_email;

// $to_email="test@test.com";

// $emailAddress=$to_email;

// // echo $to_email;
// // echo $emailAddress;

// $newPassword = $_POST['newPassword'];
// // echo $newPassword;


// // query to update passowrd
// $passwordSql = ("UPDATE users SET Password = '$newPassword' WHERE users.Email = '$emailAddress'");

// // echo $passwordSql;

// // execute query and update values to sql
// if ($conn->query($passwordSql) == TRUE) {
//     // echo "changed pwd";
//     echo '<script>alert("Password Changed")</script>';
//     header('Location: ../index.html');
//     exit;
// } else {
//     echo "failed due to " . $conn->error;
// }
// //  }
?>