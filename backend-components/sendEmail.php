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

}


    // $to_email=$_POST['email'];
    $to_email="timalsinasibindra@gmail.com";

    // echo $email;

    $code = mt_rand(1111,9999);
    

    // $subject = "Simple Email Test via PHP";
    // $body = "Hi, This is test email send by PHP Script";
    // $headers = "From: sender email";

    // if (mail($to_email, $subject, $body, $headers)) {
    //     echo "Email successfully sent to $to_email...";
    // } else {
    //     echo "Email sending failed...";
    // }

    // use PHPMailer\PHPMailer\PHPMailer;
    // // use PHPMailer\PHPMailer\Exception;
    // require 'path/to/PHPMailer/src/Exception.php';
    // require 'path/to/PHPMailer/src/PHPMailer.php';
    // require 'path/to/PHPMailer/src/SMTP.php';


    // $mail=new PHPMailer(true);


    // $mail->isSMTP();
    // $mail->Host="smtp.gmail.com";
    // $mail->SMTPAuth=true;
    // $mail->Username="examportalnepal@gmail.com";
    // $mail->Password="lysdugovoqhgolqg";

    // $mail->SMTPSecure='ssl';
    // $mail->Port=465;

    // $mail->setForm("examportalnepal@gmail.com");

    // $mail->addAddress("timalsinasibindra@gmail.com");

    // $mail->isHTML(true);

    // $mail->Subject="exam portal verification code";

    // $mail->Body="Your verification code is :'$code'";
    
    // $mail->send();


    // use PHPMailer\PHPMailer\PHPMailer;

    // require 'vendor/autoload.php';

    // $mail = new PHPMailer;

    // $mail->isSMTP();

    // $mail->SMTPDebug = 2;

    // $mail->Host = 'smtp.hostinger.com';
    // $mail->Port = 587;

    // $mail->SMTPAuth = true;

    // $mail->Username = 'examportalnepal@gmail.com';
    // $mail->Password = 'lysdugovoqhgolqg';

    // $mail->setFrom('examportalnepal@gmail.com', 'Exam Portal');
    // $mail->addReplyTo('examportalnepal@gmail.com', 'Exam Portal');

    // $mail->addAddress('timalsinasibindra@gmail.com', 'Hello');

    // $mail->Subject = 'Checking if PHPMailer works';

    // $mail->msgHTML(file_get_contents('message.html'), __DIR__);
    // $mail->Body = 'This is just a plain text message body';
    // //$mail->addAttachment('attachment.txt');
    // if (!$mail->send()) {
    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'The email message was sent.';
    // }

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
  
    require 'vendor/autoload.php';
  
    require_once '../class.phpmailer.php';

    $mail = new PHPMailer(true);
  
try {
    $mail->SMTPDebug = 2;                                       
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gfg.com;';                    
    $mail->SMTPAuth   = true;                             
    $mail->Username   = 'examportalnepal@gmail.com';                 
    $mail->Password   = 'lysdugovoqhgolqg';                        
    $mail->SMTPSecure = 'tls';                              
    $mail->Port       = 587;  
  
    $mail->setFrom('examportalnepal@gmail.com', 'Name');           
    $mail->addAddress('timalsinasibindra@gmail.com');
    $mail->addAddress('timalsinasibindra@gmail.com', 'Name');
       
    $mail->isHTML(true);                                  
    $mail->Subject = 'Subject';
    $mail->Body    = 'HTML message body in <b>bold</b> ';
    $mail->AltBody = 'Body in plain text for non-HTML mail clients';
    $mail->send();
    echo "Mail has been sent successfully!";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>