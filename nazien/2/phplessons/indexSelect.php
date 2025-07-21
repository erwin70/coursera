<?php
include_once 'includes/dbh.inc.php';
?>

<!doctype html>
<html>
<head>
<title> login </title>
</head>
<body>

<?php

/*
vorige les
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['userUid']."<br>";	
	}
}	
*/
	$data = "Admin";
	// created a template
	$sql = "select * from users where userUid=?;";
	// create a prepared statement
	$stmt = mysqli_stmt_init($conn);
	// prepare the prepared statment
	if (!mysqli_stmt_prepare($stmt, $sql)) {
     echo "SQL statment failed";
	 } else {
	//Bind parameters to the placeholder
	mysqli_stmt_bind_param($stmt, "s", $data);
	// run parameter insite database
	mysqli_stmt_execute($stmt);
	$result = mysqli_stmt_get_result($stmt);
	 	 
	 while ($row = mysqli_fetch_assoc($result)) {
		echo $row['userUid']."<br>";	
	}
}
?>

</body>
</html>