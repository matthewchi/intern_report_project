<?php

include("includes/server.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'PHPMailer-master/src/Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer-master/src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer();

   /**
    * Set all the attributes for $mail using the
    * data from the previous forms
    * Change the attributes accordingly
    */

    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = "ssl"; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "cgt456group03@gmail.com";
    $mail->Password = "glotZbach!";
    $mail->SetFrom("cgt456group03@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "This is a test message";
    $mail->AddAddress("oceans.varun@gmail.com");
    
     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } 
     else {
        echo "Message has been sent";
     }

?>