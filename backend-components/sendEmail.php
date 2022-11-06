<?php
// php mailer dependencies
use PHPMailer\PHPMailer\PHPMailer;

// connection to localhost
$server = "localhost";
$username = "root";
$password = "";
$dB = "Exam-Portal";

$conn = mysqli_connect($server, $username, $password, $dB);

if (!$conn) {
    die("Connect failed:");
} else {

    // echo("sucess");
    // $to_email=$_POST['email'];
    $to_mail="timalsinasibindra@gmail.com";

    // generate 4 digit code
    $code = mt_rand(1111,9999);
   
    require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'examportalnepal@gmail.com';                     //SMTP username
    $mail->Password   = 'tGPgu9hmKcEenmk';                               //SMTP password
    $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('examportalnepal@gmail.com', 'Exam-Portal');
    $mail->addAddress($to_mail);               //Name is optional


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    

    // // new php mailer class
    // $mail = new PHPMailer();

    // require "phpmailer/scr/Exception.php";
    // require "phpmailder/src/PHPMailer.php";
    // require "phpmailer/src/SMTP.php";

    // $mail=new PHPMailer(true);

    // $mail->isSMTP();
    // $mail->Host="smtp.gmail.com";
    // $mail->SMTPAuth=true;
    // $mail->Username='examportalnepal@gmail.com';
    // $mail->Password='lysdugovoqhgolqg';
    // $mail->SMTPSecure="ssl";
    // $mail->Port=465;

    // $mail->setFrom("examportalnepal@gmail.com");

    // $mail->addAddress($to_mail);

    // $mail->isHTML(true);

    // $mail->Subject="Exam Portal test mail";

    // $mail->Body="Your code is :'$code'";

    // $mail->send();

    // echo "works";

}

?>