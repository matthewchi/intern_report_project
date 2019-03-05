<?php
session_start();

$errors = array();

//$interns = array();

$announcements = array();

//connect to localhost
//$db = mysqli_connect( "localhost", "root", "root", "internships" );

//connect to db
$db = mysqli_connect( "goss.tech.purdue.edu", "cgt456group03", "Group03c7929", "cgt456group03" );

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
	unset( $_SESSION[ "intern_name" ] );
	unset( $_SESSION[ "post" ] );
	unset( $_SESSION[ "fname" ] );
	unset( $_SESSION[ "name" ] );
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
			header( "Location: supervisor_home.php" ); // redirect to supervisor home
		} else {
			array_push( $errors, "The username and password do not match" );
		}
	}
}

//intern report
$intern1_1_company = "";
$intern1_2_address = "";
$intern1_3_cgt = "";
$intern1_4_supervisor_name = "";
$intern1_5_supervisor_email = "";
$intern1_6_supervisor_phone = "";

$intern2_1_startdate = "";
$intern2_2_enddate = "";
$intern2_3_totalhours = "";
$intern2_4_office = "";
$intern2_5_activity_1 = "";
$intern2_6_activity_2 = "";
$intern2_7_activity_3 = "";
$intern2_8_activity_4 = "";
$intern2_9_activity_5 = "";

$intern2_10_relevant_work = "";
$intern2_11_problems = "";
$intern2_12_workexperience = "";
$intern2_13_learn = "";
$intern2_14_cgt_sector_change = "";
$intern2_15_future_employment = "";
$intern2_16_rate_experience = "";

$intern3_1_paid = "";
$intern3_2_salary = "";
$intern3_3_stipend = "";
$intern3_4_assist = "";

$supervisor_eval = "Incomplete";
$advisor_approve = "Unapproved";

//if the submit intern report button is clicked
if ( isset( $_POST[ 'intern_report' ] ) ) {

	$ca_username = $_SESSION["username"];

	$intern1_1_company = addslashes( $_POST[ "intern1_1_company" ] );
	$intern1_2_address = addslashes( $_POST[ "intern1_2_address" ] );
	$intern1_3_cgt = addslashes( $_POST[ "intern1_3_cgt" ] );
	$intern1_4_supervisor_name = addslashes( $_POST[ "intern1_4_supervisor_name" ] );
	$intern1_5_supervisor_email = addslashes( $_POST[ "intern1_5_supervisor_email" ] );
	$intern1_6_supervisor_phone = addslashes( $_POST[ "intern1_6_supervisor_phone" ] );

	$intern2_1_startdate = addslashes( $_POST[ "intern2_1_startdate" ] );
	$intern2_2_enddate = addslashes( $_POST[ "intern2_2_enddate" ] );
	$intern2_3_totalhours = addslashes( $_POST[ "intern2_3_totalhours" ] );
	$intern2_4_office = addslashes( $_POST[ "intern2_4_office" ] );
	$intern2_5_activity_1 = addslashes( $_POST[ "intern2_5_activity_1" ] );
	$intern2_6_activity_2 = addslashes( $_POST[ "intern2_6_activity_2" ] );
	$intern2_7_activity_3 = addslashes( $_POST[ "intern2_7_activity_3" ] );
	$intern2_8_activity_4 = addslashes( $_POST[ "intern2_8_activity_4" ] );
	$intern2_9_activity_5 = addslashes( $_POST[ "intern2_9_activity_5" ] );

	$intern2_10_relevant_work = addslashes( $_POST[ "intern2_10_relevant_work" ] );
	$intern2_11_problems = addslashes( $_POST[ "intern2_11_problems" ] );
	$intern2_12_workexperience = addslashes( $_POST[ "intern2_12_workexperience" ] );
	$intern2_13_learn = addslashes( $_POST[ "intern2_13_learn" ] );
	$intern2_14_cgt_sector_change = addslashes( $_POST[ "intern2_14_cgt_sector_change" ] );
	$intern2_15_future_employment = addslashes( $_POST[ "intern2_15_future_employment" ] );
	$intern2_16_rate_experience = addslashes( $_POST[ "intern2_16_rate_experience" ] );

	$intern3_1_paid = addslashes( $_POST[ "intern3_1_paid" ] );
	$intern3_2_salary = addslashes( $_POST[ "intern3_2_salary" ] );
	$intern3_3_stipend = addslashes( $_POST[ "intern3_3_stipend" ] );
	$intern3_4_assist = addslashes( $_POST[ "intern3_4_assist" ] );

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

	//if there are no errors, save user to db
	if ( count( $errors ) == 0 ) {
		$sql = "INSERT INTO internship_report (userid, intern1_1_company, intern1_2_address, intern1_3_cgt, intern1_4_supervisor_name, intern1_5_supervisor_email, intern1_6_supervisor_phone, intern2_1_startdate, intern2_2_enddate, intern2_3_totalhours, intern2_4_office, intern2_5_activity_1, intern2_6_activity_2, intern2_7_activity_3, intern2_8_activity_4, intern2_9_activity_5, intern2_10_relevant_work, intern2_11_problems, intern2_12_workexperience, intern2_13_learn, intern2_14_cgt_sector_change, intern2_15_future_employment, intern2_16_rate_experience, intern3_1_paid, intern3_2_salary, intern3_3_stipend, intern3_4_assist, supervisor_eval, advisor_approve) VALUES ('$ca_username', '$intern1_1_company', '$intern1_2_address', '$intern1_3_cgt', '$intern1_4_supervisor_name', '$intern1_5_supervisor_email', '$intern1_6_supervisor_phone', '$intern2_1_startdate', '$intern2_2_enddate', '$intern2_3_totalhours', '$intern2_4_office', '$intern2_5_activity_1', '$intern2_6_activity_2', '$intern2_7_activity_3', '$intern2_8_activity_4', '$intern2_9_activity_5', '$intern2_10_relevant_work', '$intern2_11_problems', '$intern2_12_workexperience', '$intern2_13_learn', '$intern2_14_cgt_sector_change', '$intern2_15_future_employment', '$intern2_16_rate_experience', '$intern3_1_paid', '$intern3_2_salary', '$intern3_3_stipend', '$intern3_4_assist', '$supervisor_eval', '$advisor_approve')";
		//echo($sql);
		mysqli_query( $db, $sql );
		$_SESSION[ "username" ] = $ca_username;
		$_SESSION[ "success" ] = "Successfully reported internship.";
		header( "Location: internship_home.php" ); // redirect to internship home
	}
}

//supervisor evaluation
$super1 = "";
$super2 = "";
$super3 = "";
$super4 = "";
$super5 = "";
$super6 = "";
$super7 = "";
$super8 = "";
$super9 = "";
$super10 = "";
$super11 = "";
$super12 = "";
$super13 = "";
$super14 = "";
$super15 = "";
$super16 = "";
$super17 = "";
$super18 = "";
$super19 = "";
$super20 = "";
$super21 = "";

//if the submit intern report button is clicked
if ( isset( $_POST[ 'submit_intern' ] ) ) {
	$s_email = $_SESSION["username"];

	$intern = $_SESSION["intern_name"];

	$super1 = addslashes( $_POST[ "super1" ] );
	$super2 = addslashes( $_POST[ "super2" ] );
	$super3 = addslashes( $_POST[ "super3" ] );
	$super4 = addslashes( $_POST[ "super4" ] );
	$super5 = addslashes( $_POST[ "super5" ] );
	$super6 = addslashes( $_POST[ "super6" ] );
	$super7 = addslashes( $_POST[ "super7" ] );
	$super8 = addslashes( $_POST[ "super8" ] );
	$super9 = addslashes( $_POST[ "super9" ] );
	$super10 = addslashes( $_POST[ "super10" ] );
	$super11 = addslashes( $_POST[ "super11" ] );
	$super12 = addslashes( $_POST[ "super12" ] );
	$super13 = addslashes( $_POST[ "super13" ] );
	$super14 = addslashes( $_POST[ "super14" ] );
	$super15 = addslashes( $_POST[ "super15" ] );
	$super16 = addslashes( $_POST[ "super16" ] );
	$super17 = addslashes( $_POST[ "super17" ] );
	$super18 = addslashes( $_POST[ "super18" ] );
	$super19 = addslashes( $_POST[ "super19" ] );
	$super20 = addslashes( $_POST[ "super20" ] );
	$super21 = addslashes( $_POST[ "super21" ] );

	//ensure that form fields are filled properly
	if ( empty( $super1 ) ) {
		array_push( $errors, "Error 1" );
	}
	if ( empty( $super2 ) ) {
		array_push( $errors, "Error 2" );
	}
	if ( empty( $super3 ) ) {
		array_push( $errors, "Error 3" );
	}
	if ( empty( $super4 ) ) {
		array_push( $errors, "Error 4" );
	}
	if ( empty( $super5 ) ) {
		array_push( $errors, "Error 5" );
	}
	if ( empty( $super6 ) ) {
		array_push( $errors, "Error 6" );
	}
	if ( empty( $super7 ) ) {
		array_push( $errors, "Error 7" );
	}
	if ( empty( $super8 ) ) {
		array_push( $errors, "Error 8" );
	}
	if ( empty( $super9 ) ) {
		array_push( $errors, "Error 9" );
	}
	if ( empty( $super10 ) ) {
		array_push( $errors, "Error 10" );
	}
	if ( empty( $super11 ) ) {
		array_push( $errors, "Error 11" );
	}
	if ( empty( $super12 ) ) {
		array_push( $errors, "Error 12" );
	}
	if ( empty( $super13 ) ) {
		array_push( $errors, "Error 13" );
	}
	if ( empty( $super14 ) ) {
		array_push( $errors, "Error 14" );
	}
	if ( empty( $super15 ) ) {
		array_push( $errors, "Error 15" );
	}
	if ( empty( $super16 ) ) {
		array_push( $errors, "Error 16" );
	}
	if ( empty( $super17 ) ) {
		array_push( $errors, "Error 17" );
	}
	if ( empty( $super18 ) ) {
		array_push( $errors, "Error 18" );
	}
	if ( empty( $super19 ) ) {
		array_push( $errors, "Error 19" );
	}
	if ( empty( $super20 ) ) {
		array_push( $errors, "Error 20" );
	}
	if ( empty( $super21 ) ) {
		array_push( $errors, "Error 21" );
	}

	//if there are no errors, save user to db
	if ( count( $errors ) == 0 ) {
		$sql = "INSERT INTO super_eval (email, intern, super1, super2, super3, super4, super5, super6, super7, super8, super9, super10, super11, super12, super13, super14, super15, super16, super17, super18, super19, super20, super21) VALUES ('$s_email', '$intern', '$super1', '$super2', '$super3', '$super4', '$super5', '$super6', '$super7', '$super8', '$super9', '$super10', '$super11', '$super12', '$super13', '$super14', '$super15', '$super16', '$super17', '$super18', '$super19', '$super20', '$super21')";
		//echo($sql);
		mysqli_query( $db, $sql );
		$_SESSION[ "username" ] = $s_email;
		$_SESSION[ "success" ] = "Successfully evaluated intern.";
		header( "Location: supervisor_home.php" ); // redirect to internship home
	}
}

//if the evaluate intern button is clicked
if ( isset( $_POST[ 'intern_eval' ] ) ) {

	$intern_name = addslashes( $_POST[ "intern_name" ] );

	$_SESSION[ "intern_name" ] = $intern_name;

	header( "Location: supervisor_report.php" ); // redirect to internship home
}

//if the submit post button is clicked
if ( isset( $_POST[ 'submit_post' ] ) ) {
	$ca_username = $_SESSION["username"];

	$post_time = date("m/d/y");
	$post_content = addslashes( $_POST[ "post_content" ] );

	//ensure that form fields are filled properly
	if ( empty( $post_content ) ) {
		array_push( $errors, "Error" );
	}

	//if there are no errors, save user to db
	if ( count( $errors ) == 0 ) {
		$sql = "INSERT INTO announcement (user_id, post_time, post_content) VALUES ('$ca_username', '$post_time', '$post_content')";
		//echo($sql);
		mysqli_query( $db, $sql );
		$_SESSION[ "username" ] = $ca_username;
		$_SESSION[ "success" ] = "Successfully made post.";
		header( "Location: home.php" ); // redirect to internship home
	}
}

?>
