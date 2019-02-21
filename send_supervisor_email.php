<?php

include("includes/server.php");

?>

<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = $_POST["intern1_5_supervisor_email"];
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
         }
      ?>
      
   </body>
</html>