<?php

include( "includes/server.php" );

//if user is not logged in, they cannot access this page
if (empty($_SESSION["username"])) {
	header("Location: index.php");
}

if (isset($_SESSION["post"])):
	//get all internships
	$sql = "SELECT * FROM internship ORDER BY id DESC";
	$result = mysqli_query($db, $sql);

	if($result->num_rows == 0)
	{
		echo("0 results");
	}
	else
	{
		//$row=$result->fetch_array();
	}
endif;

//if student, only display their internships
if (isset($_SESSION["student"])):
	//get student internships
	$sql = "SELECT * FROM internship ORDER BY id DESC";
	$result = mysqli_query($db, $sql);

	if($result->num_rows == 0)
	{
		echo("0 results");
	}
	else
	{
		//$row=$result->fetch_array();
	}
endif;



?>
<!DOCTYPE html>
<html>
<head>
<title>Internship Dashboard</title>

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
      <?php if (isset($_SESSION["student"])): ?>
    <h2>Your Internships (Total Intern Hours: )</h2>

      <button type="button" onclick="location.href='internship_report.php'">Report Internship</button>
      <?php
      endif ?>

      <?php if (isset($_SESSION["post"])): ?>
      <h2>Reported Internships</h2>
      <?php
      endif ?>
        <table style="width: 100%;">
            <thead>
            <tr>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Company Name</th>
                <th>Supervisor Name</th>
                <th>Supervisor Email</th>
                <th>Supervisor Evaluation</th>
                <th>Advisor Approval</th>
            </tr>
            </thead>

            <tbody>
            <?php if (isset($_SESSION["post"])):

                while ($row = $result->fetch_assoc()) {

                    ?>
                    <tr>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern2_1_startdate']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern2_2_enddate']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_1_company']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_4_supervisor_name']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_5_supervisor_email']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['supervisor_eval']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['advisor_approve']; ?></td>
                        <td style="border-top:1px solid #000000;"><a href="">View Details</a></td>
                        <td style="border-top:1px solid #000000;">
                            <form method="post" action="internship_home.php">
                                <input type="hidden" name="internship_id" value="<?php $row['id'] ?>">
                                <button type="submit" name="approve">Approve</button>
                            </form>
                        </td>
                    </tr>
                    <?php

                }
            endif ?>

            <?php if (isset($_SESSION["student"])):

                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern2_1_startdate']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern2_2_enddate']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_1_company']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_4_supervisor_name']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['intern1_5_supervisor_email']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['supervisor_eval']; ?></td>
                        <td style="border-top:1px solid #000000;"><?php echo $row['advisor_approve']; ?></td>
                        <td style="border-top:1px solid #000000;"><a href="">Edit</a></td>
                        <td style="border-top:1px solid #000000;"><a href="">Delete</a></td>
                    </tr>
                    <?php
                }
            endif ?>
            </tbody>
        </table>



<!--
    <div class="internship-tile">
      <h4>Name of Internship</h4>
      <p style="display:inline;">
        brief description of internship
      </p>
      <a style="float:right; display:inline;" href="url">edit</a>
    </div>
-->


  </div>

</div>

</body>
</html>
