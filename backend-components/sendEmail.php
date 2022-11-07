<?php
// // php mailer dependencies
// use PHPMailer\PHPMailer\PHPMailer;

// // connection to localhost
// $server = "localhost";
// $username = "root";
// $password = "";
// $dB = "Exam-Portal";

// $conn = mysqli_connect($server, $username, $password, $dB);

// if (!$conn) {
//     die("Connect failed:");
// } else {

//     $to_email=$_POST['email'];

//     // generate 4 digit code
//     // FIXME: mt_rand generaes new valie everytime it is called
//     // $code = mt_rand(1111,9999);
//     $code=1111;

require("emailConnection.php");
require 'vendor/autoload.php';


// php mailer dependencies
use PHPMailer\PHPMailer\PHPMailer;


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'examportalnepal@gmail.com';                     //SMTP username
    $mail->Password   = 'lysdugovoqhgolqg';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('examportalnepal@gmail.com', 'Exam-Portal');
    $mail->addAddress($to_email);


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'exam portal verification code';
    $mail->Body    = "Your verification code is:'$code'";
    // echo $code;

    $mail->send();
    echo 'Message has been sent';

    header('Location: emailVerification-components/verification.php');
    exit;
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
//  include ("emailVerification-components/verification.php");
// header('Location: emailVerification-components/verification.php ');
// exit;

// $conn->close();

?>
