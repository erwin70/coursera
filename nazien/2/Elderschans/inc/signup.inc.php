<?php
include_once 'dbh.inc.php';

	
$FietsNr = $_POST['FietsNr'];
$FietsTy = $_POST['FietsTy'];
$HuurDm = $_POST['HuurDm'];
$Pr = $_POST['Pr'];


$sql = "insert into huurfietsen (FietsNummer, FietsType, HuurDatum, Prijs)
	values('$FietsNr', '$FietsTy', '$HuurDm', '$Pr');";
mysqli_query($conn, $sql);

echo 'SELECT * FROM huurfietsen';

header("Location: ../insertFietsverhuur.php?signup=succes");
	
?>