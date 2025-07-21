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
$sql = "insert into users (userFirst, userLast, userEmail, userUId, userPwd)
								values
									('Robert', 'Hoogstraat', 'robert@gmail.com', 'Admin3', '12345678');";
								mysqli_query($conn, $sql);
?>

</body>
</html>