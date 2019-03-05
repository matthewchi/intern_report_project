<?php

include( "includes/server.php" );

//ensure that form fields are filled properly
if ( empty( $intern1_1_company ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern1_2_address ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern1_3_cgt ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern1_4_supervisor_name ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern1_5_supervisor_email ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern1_6_supervisor_phone ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_1_startdate ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_2_enddate ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_3_totalhours ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_4_office ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_5_activity_1 ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_6_activity_2 ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_7_activity_3 ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_8_activity_4 ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_9_activity_5 ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_10_relevant_work ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_11_problems ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_12_workexperience ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_13_learn ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_14_cgt_sector_change ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_15_future_employment ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern2_16_rate_experience ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern3_1_paid ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern3_2_salary ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern3_3_stipend ) ) {
  array_push( $errors, "Error" );
}
if ( empty( $intern3_4_assist ) ) {
  array_push( $errors, "Error" );
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Exception class. */
require 'PHPMailer-master/src/Exception.php';

/* The main PHPMailer class. */
require 'PHPMailer-master/src/PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require 'PHPMailer-master/src/SMTP.php';

if ( count( $errors ) == 0 ) {

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
      $mail->Subject = "Internship Evaluation for ".$_SESSION["name"];
      $mail->Body = "Hello ".$intern1_4_supervisor_name.",";
      $mail->AddAddress($intern1_5_supervisor_email);

       if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo;
       }
       else {
          echo "Message has been sent";
       }
  }
else {
  header( "Location: internship_report.php" );
}
?>
