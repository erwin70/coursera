<?php
include_once 'inc/dbhChatbox.inc.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Chatbox</title>
</head>
<body>
<center>
<br>
<br>
<form action="inc/signupChatbox.inc.php" method="POST">

<input type="text" name="Tekst" placeholder="ChatText">

<button type="submit">Bevestig</button>
</form>
<br>
<br>

<?php
$sql = "SELECT * FROM `Chatbox` ORDER by ID DESC;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<table><tr><td width=150><center>".$row['Datum']."</center></td>",
					"<td width=150><center>".$row['Text']."</center></td></tr></table><br>";

	}
}	
?>		


</center>
</body>
</html>