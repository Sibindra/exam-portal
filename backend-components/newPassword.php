<?php

// require "./sendEmail.php";
require "emailConnection.php";

// echo $dB;

$emailAddress=$_GET['requestedEmail'];

$mailAddress=base64_decode($emailAddress);

// echo $mailAddress;

// $mailAddress="dpk.me.123@gmail.com";
// echo $mailAddress;
$newPassword = $_POST['newPassword'];
// echo $newPassword;


// query to update passowrd
$passwordSql = ("UPDATE users SET Password = '$newPassword' WHERE users.Email = '$mailAddress'");

$result=mysqli_query($conn,$passwordSql);
// $passwordSql = "UPDATE users SET Password = '$newPassword' WHERE users.Email = '$emailAddress'";

// echo $passwordSql;

// echo $passwordSql;

// execute query and update values to sql
if ($conn->query($passwordSql) == TRUE) {
    // echo "changed pwd";
    header('Location: ../index.html');
    echo '<script>alert("Password Changed")</script>';
    exit;

} else {
    echo "failed due to " . $conn->error;
}

//  }

// $answer=mysqli_query($conn,$sql);
// echo '<script>alert("Password Changed")</script>';

?>