<?php

// php mailer dependencies
use PHPMailer\PHPMailer\PHPMailer;

require 'vendor/autoload.php';
require("emailConnection.php");



function sendMail()
{
    require("emailConnection.php");
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        // $code=1111;
        $code=mt_rand(1111,9999);
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
        $mail->Body    = "Your verification code is: '$code'";
        
        // FIXME:enable this
        // $mail->send();

        // echo $mailNo;
        header('Location: emailVerification-components/verification.php?requestedEmail='.base64_encode($to_email).'&code='.base64_encode($code));
        exit;
        
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// // send email case
$checkMail = ("SELECT * FROM users WHERE email='$to_email'");
// echo $checkMail;
$ans = mysqli_query($conn, $checkMail);
// echo $ans;

$mailNo = mysqli_num_rows($ans);


if ($mailNo > 0) {
    // echo $code;
    sendMail();
    // echo "nice";
    // echo $code;
    // echo $code;
} else {
    echo "Email does not exist";
}
