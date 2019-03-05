<?php
//account type and name
if ( isset( $_SESSION[ "username" ] ) ) {
	$username = $_SESSION[ "username" ];
}

$sql = "SELECT * FROM users WHERE username='$username'";
$query = mysqli_query( $db, $sql );

if ( $query->num_rows > 0 ) {
	while ( $row = $query->fetch_assoc() ) {

		$fname = $row[ "fname" ];
    $lname = $row[ "lname" ];

    $_SESSION["fname"] = $fname;
    $_SESSION["name"] = $fname." ".$lname;

	}
}
?>
