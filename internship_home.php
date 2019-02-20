<?php

include( "includes/server.php" );

?>
<!DOCTYPE html>
<html>
<head>
<title>Internship Dashboard</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="js/script.js"></script>

</head>
<body style="background-color:#efefef;">

<!-- top nav bar -->
<div class="top-nav">
    <?php include("includes/top-nav.php");?>
</div>

<!-- max width 760px -->
<div class="container">

  <div class="internship">
    <h2>Your Internships</h2>

    <div class="internship-tile">
      <h4>Name of Internship</h4>
      <p style="display:inline;">
        brief description of internship
      </p>
      <a style="float:right; display:inline;" href="url">edit</a>
    </div>

    <button type="button" onclick="location.href='internship_report.php'">Report Internship</button>
  </div>

</div>

</body>
</html>
