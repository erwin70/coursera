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
$sql = "select * from users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo $row['userFirst']."&nbsp;", $row['userLast']."<br>";
	}
}	
?>

</body>
</html>