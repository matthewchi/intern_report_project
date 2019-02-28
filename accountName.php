<?php
//account type and name
if ( isset( $_SESSION[ "username" ] ) ) {
	$username = $_SESSION[ "username" ];
}

$sql = "SELECT accounttype FROM users WHERE username='$username'";
$query = mysqli_query( $db, $sql );

if ( $query->num_rows > 0 ) {
	while ( $row = $query->fetch_assoc() ) {
		$catid = $row[ "accounttype" ];
		if ( $catid == 1 ) {
			$catname = "Student";
			$_SESSION["student"] = $catname;
		} else if ( $catid == 2 ) {
			$catname = "Supervisor";
			$_SESSION["post"] = $catname;
		} else if ( $catid == 3 ) {
			$catname = "Advisor";
			$_SESSION["post"] = $catname;
		} else if ( $catid == 4 ) {
			$catname = "Administration";
			$_SESSION["post"] = $catname;
		} else if ( $catid == 5 ) {
			$catname = "Faculty";
			$_SESSION["post"] = $catname;
		} else if ( $catid == 6 ) {
			$catname = "Admin";
			$_SESSION["post"] = $catname;
		}
	}
}
?>
