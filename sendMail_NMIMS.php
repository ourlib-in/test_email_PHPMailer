<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

// $mail = new PHPMailer(true);


//         $message = mailTemp();

//         // Configuring SMTP server settings
//         $mail->isSMTP();
//         $mail->SMTPDebug = 3;
//         $mail->Host = "";
//         $mail->Port = 465;
//         $mail->SMTPSecure = 'tls';
//         $mail->SMTPAuth = true;
//         $mail->Username = "";
//         $mail->Password = '';

// 	$mail->setFrom("");

//         // Email Sending Details
//         $mail->addAddress("", "Amar Londhe");
//         $mail->Subject = "Hello This is Test mail";
//         $mail->msgHTML($message);

//         $mail->send();

// function mailTemp(){

// }

?>
