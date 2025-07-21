<?php
include_once 'dbh.inc.php';

	
$Datum = $_POST['Datum'];
$Text = $_POST['Text'];
$Zichtbaar = $_POST['Zichtbaar'];


$sql = "insert into Chatbox (Text)
	values('$Datum', '$Text', '$Zichtbaar');";
mysqli_query($conn, $sql);

echo 'SELECT * FROM Chatbox';

header("Location: ../insertChatHouskeeping.php?signup=succes");
	
?>