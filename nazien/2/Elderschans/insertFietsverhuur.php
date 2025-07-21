<?php
include_once 'inc/dbh.inc.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Fiets verhuur</title>

 <link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<center>
<br>
<br>
<form action="inc/signup.inc.php" method="POST">

<input type="date" name="HuurDm" placeholder="HuurDatum">

<select name="FietsTy">
            <option value="Gewone fiets">Gewone fiets</option>
            <option value="E-bike">E-bike</option>
        </select>

<input type="text" name="FietsNr" placeholder="FietsNummer">

<select name="Pr">
            <option value="12.5">12.5</option>
            <option value="30">30</option>
        </select>

<button type="submit">Bevestig</button>
</form>
<br>
<br>

<?php
$sql = "SELECT DATE_FORMAT(Huurdatum, '%d-%m-%Y') as datum,  FietsType, Prijs, FietsNummer FROM `huurfietsen` ORDER by ID DESC;";

// select concat(FietsType,"",Prijs) as TypeAndPrijs

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

// $totaal = "SELECT SUM(Prijs) FROM huurfietsen";

if ($resultCheck > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<table><tr><td width=150><center>".$row['datum']."</center></td>",
				"<td width=150><center>".$row['FietsType']."</center></td>",
				"<td width=50><center>".$row['FietsNummer']."</center></td>",
				"<td width=150><center>".$row['Prijs']."</center></td>
				</tr></table><br>";

	}
}	
?>		


</center>
</body>
</html>