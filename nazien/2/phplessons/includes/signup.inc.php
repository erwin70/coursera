<?php
include_once 'dbh.inc.php';
/*
voor les 40

$first = mysqli_real_escape_string($conn, $_POST['first']); //      $first = $_POST['first'];     dit  is ook mogelijk maar niet veilig 
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


$sql = "insert into users (userFirst, userLast, userEmail, userUId, userPwd)
	values('$first', '$last', '$email', '$uid', '$pwd');";
mysqli_query($conn, $sql);
								
header("Location: ../insertDataInHTML.php?signup=succes");
*/
	
$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$uid = mysqli_real_escape_string($conn, $_POST['uid']);
$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);


$sql = "insert into users (userFirst, userLast, userEmail, userUId, userPwd)
	values('?', '?', '?', '?', '?');";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo "SQL error";
		}
	else 
	{
		mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
	mysqli_stmt_execute($stmt);	
	}								
header("Location: ../insertDataInHTML.php?signup=succes");
	
?>