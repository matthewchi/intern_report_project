<?php

include("includes/server.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'PHPMailer-master\src\Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer-master\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer-master\src\SMTP.php';

$email = new PHPMailer();

   /**
    * Set all the attributes for $mail using the
    * data from the previous forms
    * Change the attributes accordingly
    */

   /* Set the mail sender. */
   $mail->setFrom('cgt456group3@gmail.com', 'CGT 456 - Group 3');

   /* Add a recipient. */
   // Change value to supervisor's email from session variables
   $mail->addAddress('oceans.varun@gmail.com', 'Varun');

   /* Set the subject. */
   $mail->Subject = 'Test';

   /* Set the mail message body. */
   $mail->Body = 'This is a test message';

   // Make it use SMTP
   $mail->isSMTP();

   // Set GMail as the host for the emails
   $mail->Host = 'smtp.gmail.com';

   // Use 587 as the port
   $mail->Port = 587;

   // Authenticate the mal
   $mail->SMTPAuth = true;

   // Make it secure using tls
   $mail->SMTPSecure = 'tls';
   
   /* Username (email address). */
   $mail->Username = 'cgt456group3@gmail.com';
   
   /* Google account password. */
   $mail->Password = 'goltZbach!';

   /* Finally send the mail. */
   $mail->send();

      /* Finally send the mail. */
   if (!$mail->send())
   {
      /* PHPMailer error. */
      echo $mail->ErrorInfo;
   }


?>

<!--
<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         /*$to = $_POST["intern1_5_supervisor_email"];
         $subject = "Complete Intership Report";
         
         $message = "<h1>Complete Internship Report for student</h1>";
         $message .= "<b>A student has mentioned you as their supervisor</b>";
         $message = "<b>Please click on the following link to complete the report </b>";
         $message = "<b><a href = \"/supervisor_report.php> Supervisor Report </a> </b>";

         $header = "From:Purdue Internship Report \r\n";
         $header .= "Cc:" + $_POST[ "ca_email" ] + "\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }
         else {
            echo "Message could not be sent...";
         }*/
      ?>
      
   </body>
</html>-->