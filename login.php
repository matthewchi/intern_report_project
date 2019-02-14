<?php

include( "includes/server.php" );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Login</title>

	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div class="container">
		<div class="header">
			<h2>Login</h2>
		</div>

		<form method="post" action="login.php">
			<!-- display validation errors here -->
			<?php include("error.php"); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="ca_username" value="<?php echo $ca_username; ?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="ca_password">
			</div>
			<div class="input-group">
				<button type="submit" name="login" class="btn">Login</button>
			</div>

			<a href="register.php">Create a career account</a>

		</form>
	</div>

</body>
</html>
