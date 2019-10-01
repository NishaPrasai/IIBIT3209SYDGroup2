<?php
require("PHPMailer.php");
require("SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// $str=rand(); 
// $result = md5($str); 
$mail = new PHPMailer;

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'kiachkuda@gmail.com';          // SMTP username
$mail->Password = '0729622978'; // SMTP password
$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('kiachkuda@gmail.com', 'TourCompany');
$mail->addReplyTo('kiachkuda@gmail.com', 'TourCompany');
$mail->addAddress($email);   // Add a recipient


$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>Successfully registered</h1>';
$bodyContent .= '<p>Your created account with IIBIT</p>';
$bodyContent .= '<p>We are delighted to have you as our customer</p>';
$bodyContent .= '<p>Thank you</p>';
$bodyContent .= "<a href='http://localhost/projects/1009285/app/verify.php?token=". $result. ">Verify your account</a>";

$mail->Subject = 'Email Confirmation';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   
}
?>