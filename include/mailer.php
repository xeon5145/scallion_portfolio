<?php
//including files
require "phpMailer/PHPMailer.php";
require "phpMailer/SMTP.php";
require "phpMailer/Exception.php";
//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//create instance
$mail = new PHPMailer();
//set mailer
$mail->isSMTP();
//HTML true
$mail->isHTML(true); 
//define SMTP host
$mail->Host = "smtp.gmail.com";
//enable smtp auth
$mail->SMTPAuth = "true";
//set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username
$mail->Username = "deathvalerians@gmail.com";
//set gmail password
$mail->Password = "AOBFNTNDR";
//set sender mail
$mail->setFrom("deathvalerians@gmail.com", "Onion Portfolio");

// subject
// body
// address
// to be set on server side
 ?>
