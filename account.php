<?php

include( "includes/server.php" );
include( "includes/accountName.php" );
include( "includes/userName.php" );

//if user is not logged in, they cannot access this page
if (empty($_SESSION["username"])) {
	header("Location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>

<link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>

<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="js/script.js"></script>

</head>
<body style="background-color:#efefef;">

<!-- top nav bar -->
<div class="top-nav">
    <?php include("includes/top-nav.php");?>
</div>

<!-- max width 760px -->
<div class="container">

  <!-- primary content -->
	<div class="main-content">
    <h2>Account/Profile Overview</h2>
  </div>
  
</div>

</body>
</html>
