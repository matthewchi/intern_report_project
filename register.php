<?php

include( "includes/server.php" );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Create Career Account</title>

	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<div class="container">
		<div class="header">
			<h2>Create Account</h2>
		</div>

		<form method="post" action="register.php">
			<!-- display validation errors here -->
			<?php include("error.php"); ?>
			<div class="input-group">
				<label>First Name</label>
				<input type="text" name="ca_firstname" value="<?php echo $ca_firstname; ?>">
			</div>
			<div class="input-group">
				<label>Last Name</label>
				<input type="text" name="ca_lastname" value="<?php echo $ca_lastname; ?>">
			</div>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="ca_username" value="<?php echo $ca_username; ?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="ca_password_1">
			</div>
			<div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="ca_password_2">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="text" name="ca_email" value="<?php echo $ca_email; ?>">
			</div>
			<div class="input-group">
				<label>Account Type</label>
				<select name="accounttype">
					<option value="1">Student</option>
					<option value="2">Advisor</option>
					<option value="3">Administration</option>
					<option value="4">Faculty</option>
					<option value="5">Admin</option>
				</select>
			</div>
			<div class="input-group">
				<label>Classification</label>
				<select name="classification">
					<option value="1">Freshman</option>
					<option value="2">Sophomore</option>
					<option value="3">Junior</option>
					<option value="4">Senior</option>
					<option value="5">Academic Advisor</option>
				</select>
			</div>
			<div class="input-group">
				<label>Academic Advisor</label>
				<select name="advisor">
					<option value="1">T.R. Oneal</option>
					<option value="2">Heather Mayorga</option>
				</select>
			</div>
			<div class="input-group">
				<button type="submit" name="register" class="btn">Create Account</button>
			</div>

			<a href="login.php">Sign in</a>

		</form>
	</div>

</body>
</html>
