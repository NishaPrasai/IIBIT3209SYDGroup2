<?php
require("PHPMailer.php");
require("SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

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

$bodyContent = '<h1>Thanks for Booking  our rooms</h1>';
$bodyContent .= '<p>Entrace Date :'. $entrace .'</p>';
$bodyContent .= '<p>Exit Date :'. $exit .'</p>';
$bodyContent .= '<p>Room Booked :'. $roomno .'</p>';
$mail->Subject = 'Email from IIBIT';
$mail->Body    = $bodyContent;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
	echo "<script> 
			alert('you will receive a confirmation Email');
	   </script>";
}
?>