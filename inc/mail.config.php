<?php
require "vendor/autoload.php";
date_default_timezone_set('ASIA/DHAKA');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); 
try {
	$mail->IsSMTP(); // telling the class to use SMTP
	$mail->Host       = "smtp.gmail.com"; // SMTP server
	// $mail->SMTPDebug  = 2;
	$mail->SMTPAuth   = "true";                  // enable SMTP authentication
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
	$mail->Username   = "yehansleads@gmail.com";  // GMAIL username
	$mail->Password   = "demolove123";            // GMAIL password

	$mail->SetFrom('yehansleads@gmail.com', 'sagor');
	$mail->AddReplyTo("yehansleads@gmail.com","sagor");

	$mail->addAddress('sagor.helpdesk@gmail.com', 'rashedul');

	$mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';

    ob_start();
        include "email.php";
    $mailbody = ob_get_clean();
    $mail->Body    = $mailbody;
    // $mail->msgHTML(file_get_contents('email.php', 1), __DIR__);
	// if (!$mail->send()) {
    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
    // } else {
    //     echo 'Message sent!';
    // }

    $mail->send();

}
catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


// $mail->msgHTML(file_get_contents('email.php', include_path), __DIR__);



