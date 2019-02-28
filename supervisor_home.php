<?php

include( "includes/server.php" );

//if user is not logged in, they cannot access this page
if (empty($_SESSION["username"])) {
	header("Location: index.php");
}

//connect to localhost
//$db = mysqli_connect( "localhost", "root", "root", "internships" );

//connect to db
$db = mysqli_connect( "goss.tech.purdue.edu", "cgt456group03", "Group03c7929", "cgt456group03" );

//user id
			$s_email = $_SESSION["username"];

			//get previous address
			$sql = "SELECT userid FROM internship_report WHERE intern1_5_supervisor_email = ('$s_email')";
			$result = mysqli_query($db, $sql);

			if($result->num_rows == 0)
			{
				echo("0 results");
			}
			else
			{
				//$row=$result->fetch_array();
			}

?>
<!DOCTYPE html>
<html>
<head>
<title>Supervisor Dashboard</title>

<link href="https://www.purdue.edu/purdue/images/favicon.ico" rel="shortcut icon" />

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
    <h2>Your Interns</h2>
  </div>

	<div class="internship">

      <h4><?php	if($result->num_rows !=0) { echo(trim($row["userid"]));} ?></h4>
			<p style="display:inline;">
        Intern evaluation complete, yes or no.
      </p>
      <a style="float:right; display:inline;" href="url">edit</a>

  </div>

	<?php include("includes/interns.php");?>

</div>

</body>
</html>
