<?php

include( "server.php" );
include( "accountName.php" );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!--
  <div class="nav">
  <?php include("nav.php");?>
</div>
-->
	<div class="header">
		<h2>Homepage</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION["success"])): ?>
		<div class="error success">
			<h3>
				<?php

				echo $_SESSION[ "success" ];
				unset( $_SESSION[ "success" ] );

				?>
			</h3>
		</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
		<p>Welcome
			<strong>
				<?php echo $_SESSION["username"]; ?>
			</strong>
		</p>
		<p>Account Type:
			<?php echo ($catname); ?>
		</p>
		<p><a href="index.php?logout='1'" style="color: red;">Logout</a>
		</p>
		<?php endif ?>


	</div>

</body>
</html>
