<?php

# configuratie bestand van mijn persoonlijke database
# waarin adres bestanden e.d. geplaatst kan worden.

// $user = je gebruikersnaam voor mysql
// $password = het wachtwoord
// $host = het adres van je mysql server, normaliter is dit localhost
// $dbname = de naam van je mysql database

$dbUsername= "root";
$dbPassword="";
$dbServername="localhost";
$dbName="cynthia";


//$db = mysqli_connect ($host, $user, $password) or die ("Kan geen verbinding maken met de database ");
//mysqli_select_db($dbname,$db);
mysqli_connect ($dbServername, $dbUsername, $dbPassword, $dbName);
?>