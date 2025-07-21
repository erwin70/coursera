<?php
$username = 'root';
$password = '';
$host = 'localhost';
$database = 'elderschans';

if(mysql_connect($usersname,$password,$host,$database)) {
	if (mysqli_connect_error())
	{echo "Sorry, er ging iets mis: " mysqli_connect_error;
		exit(); }
		}else {
			echo 'Sorry, ik kon helaas geen verbinding maken met de database server ! ';
			exit(); }

?>