<?php

$host = "rdbms.strato.de";
$username = "dbu1246230";
$password = "Rita@Hotel1970";
$dbname = "dbs12651304";

try {
    $pdo = new PDO($host, $username, $password, $dbname);
    $pdo->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
} catch (PDOExeption $e) {
    echo"connection failed: " , $e->getMessage();
}
?>
