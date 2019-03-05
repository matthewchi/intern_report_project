<?php

include( "includes/server.php" );
include( "includes/accountName.php" );
include( "includes/userName.php" );

//if user is not logged in, they cannot access this page
if (empty($_SESSION["username"])) {
	header("Location: index.php");
}

//get all posts
$sql = "SELECT * FROM announcement ORDER BY id DESC";
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
  <!-- side nav bar -->
  <div class="side-nav">
    <?php include("includes/side-nav.php");?>
  </div>

  <!-- primary content -->
	<div class="main-content">
		<?php if (isset($_SESSION["post"])): ?>
			<div class="post">
				<h3>Create Announcement</h3>
				<form method="post" action="home.php">
					<input class="announcement" type="text" name="post_content"/><br />
					<button type="submit" name="submit_post">Post</button>
				</form>
			</div>
		<?php endif ?>

		<?php include("includes/announcements.php");?>

        <div class="post">
            <h3>February 28, 2019</h3>
            <p>Presentation Day</p>
            <br />
            <p>Tasks completed</p>
            <ul>
                <li class="announceList">Advisor dashboard</li>
                <li class="announceList">Advisor can view list of submissions</li>
                <li class="announceList">Logout added</li>
            </ul>
        </div>
	  <div class="post">
		<h3>February 21, 2019</h3>
		<p>Work Day</p>
		<br />
	    <p>Tasks completed</p>
	    <ul>
			<li class="announceList">Databases connected for login and submitting form</li>
			<li class="announceList">Announcements added</li>
	    </ul>
        </div>
        <div class="post">
			<h3>February 14, 2019</h3>
			<p>First day of presenting and receiving feedback from Heather and T.R.</p>
			<br />
			<p>Things to do:</p>
			<ul>
				<li class="announceList">Connect the database</li>
				<li class="announceList">Styling and formatting throughout the site</li>
				<li class="announceList">Work on supervisor and advisor pages</li>
			</ul>
		</div>
	</div>

  <!-- secondary content -->
  <div class="right-content">
    <?php include("includes/right-content.php");?>
  </div>
</div>

</body>
</html>
