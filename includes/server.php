<?php
session_start();

$errors = array();

//connect to db
$db = mysqli_connect( "localhost", "root", "root", "internships" );

//career account creation and login
$ca_firstname = "";
$ca_lastname = "";
$ca_username = "";
$ca_email = "";
$accounttype = "";
$classification = "";
$advisor = "";

//if the register button is clicked
if ( isset( $_POST[ 'register' ] ) ) {
	$ca_firstname = addslashes( $_POST[ "ca_firstname" ] );
	$ca_lastname = addslashes( $_POST[ "ca_lastname" ] );
	$ca_username = addslashes( $_POST[ "ca_username" ] );
	$ca_password_1 = addslashes( $_POST[ "ca_password_1" ] );
	$ca_password_2 = addslashes( $_POST[ "ca_password_2" ] );
	$ca_email = addslashes( $_POST[ "ca_email" ] );
	$accounttype = addslashes( $_POST[ 'accounttype' ] );
	$classification = addslashes( $_POST[ 'classification' ] );
	$advisor = addslashes( $_POST[ 'advisor' ] );

	//ensure that form fields are filled properly
	if ( empty( $ca_firstname ) ) {
		array_push( $errors, "First name is required" );
	}
	if ( empty( $ca_lastname ) ) {
		array_push( $errors, "Last name is required" );
	}
	if ( empty( $ca_username ) ) {
		array_push( $errors, "Username is required" );
	}
	if ( empty( $ca_password_1 ) ) {
		array_push( $errors, "Password is required" );
	}
	if ( $ca_password_1 != $ca_password_2 ) {
		array_push( $errors, "The specified passwords do not match" );
	}
	if ( empty( $ca_email ) ) {
		array_push( $errors, "Email is required" );
	}
	if ( empty( $accounttype ) ) {
		array_push( $errors, "Must select an account type" );
	}
	if ( empty( $classification ) ) {
		array_push( $errors, "Must select a classification" );
	}
	if ( empty( $advisor ) ) {
		array_push( $errors, "Must select an advisor" );
	}

	//if there are no errors, save user to db
	if ( count( $errors ) == 0 ) {
		$ca_password = md5( $ca_password_1 ); //encrypt password before storing in db
		$sql = "INSERT INTO users (fname, lname, username, password, email, accounttype, classification, advisor) VALUES ('$ca_firstname', '$ca_lastname', '$ca_username', '$ca_password', '$ca_email', '$accounttype', '$classification', '$advisor')";
		mysqli_query( $db, $sql );
		$_SESSION[ "username" ] = $ca_username;
		$_SESSION[ "success" ] = "You are now logged in";
		header( "Location: home.php" ); // redirect to homepage
	}
}

//log user in from login page
if ( isset( $_POST[ "login" ] ) ) {
	$ca_username = addslashes( $_POST[ "ca_username" ] );
	$ca_password = addslashes( $_POST[ "ca_password" ] );

	//ensure that form fields are filled properly
	if ( empty( $ca_username ) ) {
		array_push( $errors, "Username is required" );
	}
	if ( empty( $ca_password ) ) {
		array_push( $errors, "Password is required" );
	}

	if ( count( $errors ) == 0 ) {
		$ca_password = md5( $ca_password ); //encrypt password before comparing with db
		$query = "SELECT * FROM users WHERE username='$ca_username' AND password='$ca_password'";
		$result = mysqli_query( $db, $query );
		if ( mysqli_num_rows( $result ) == 1 ) {
			//log user in
			$_SESSION[ "username" ] = $ca_username;
			$_SESSION[ "success" ] = "You are now logged in";
			header( "Location: home.php" ); // redirect to homepage
		} else {
			array_push( $errors, "The username and password do not match" );
		}
	}
}

//logout career account
if ( isset( $_GET[ "logout" ] ) ) {
	session_destroy();
	unset( $_SESSION[ "username" ] );
	header( "Location: index.php" );
}

//supervisor account creating and login
$s_firstname = "";
$s_lastname = "";
$s_email = "";

//if the create account button is clicked
if ( isset( $_POST[ 'create_supervisor' ] ) ) {
	$s_firstname = addslashes( $_POST[ "s_firstname" ] );
	$s_lastname = addslashes( $_POST[ "s_lastname" ] );
	$s_password_1 = addslashes( $_POST[ "s_password_1" ] );
	$s_password_2 = addslashes( $_POST[ "s_password_2" ] );
	$s_email = addslashes( $_POST[ "s_email" ] );

	//ensure that form fields are filled properly
	if ( empty( $s_firstname ) ) {
		array_push( $errors, "First name is required" );
	}
	if ( empty( $s_lastname ) ) {
		array_push( $errors, "Last name is required" );
	}
	if ( empty( $s_password_1 ) ) {
		array_push( $errors, "Password is required" );
	}
	if ( $s_password_1 != $s_password_2 ) {
		array_push( $errors, "The specified passwords do not match" );
	}
	if ( empty( $s_email ) ) {
		array_push( $errors, "Email is required" );
	}

	//if there are no errors, save user to db
	if ( count( $errors ) == 0 ) {
		$s_password = md5( $s_password_1 ); //encrypt password before storing in db
		$sql = "INSERT INTO supervisor (fname, lname, email, password) VALUES ('$s_firstname', '$s_lastname', '$s_email', '$s_password')";
		mysqli_query( $db, $sql );
		$_SESSION[ "username" ] = $s_email;
		$_SESSION[ "success" ] = "You are now logged in";
		header( "Location: supervisor_home.php" ); // redirect to supervisor
	}
}

//log supervisor in from index page
if ( isset( $_POST[ 's_login' ] ) ) {
	$s_email = addslashes( $_POST[ "s_email" ] );
	$s_password = addslashes( $_POST[ "s_password" ] );

	//ensure that form fields are filled properly
	if ( empty( $s_email ) ) {
		array_push( $errors, "Email is required" );
	}
	if ( empty( $s_password ) ) {
		array_push( $errors, "Password is required" );
	}

	if ( count( $errors ) == 0 ) {
		$s_password = md5( $s_password ); //encrypt password before comparing with db
		$query = "SELECT * FROM supervisor WHERE email='$s_email' AND password='$s_password'";
		$result = mysqli_query( $db, $query );
		if ( mysqli_num_rows( $result ) == 1 ) {
			//log user in
			$_SESSION[ "username" ] = $s_email;
			$_SESSION[ "success" ] = "You are now logged in";
			header( "Location: home.php" ); // redirect to homepage
		} else {
			array_push( $errors, "The username and password do not match" );
		}
	}
}

?>
