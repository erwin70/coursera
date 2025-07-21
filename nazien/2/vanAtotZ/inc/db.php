<?php
$username = 'root';
$password = '';
$host = 'localhost';
$database = 'vanatotz';

if ($MySQL = mysqli_connect($host,$username,$password,$database)) {
	if (mysqli_connect_error())
	{echo "Sorry, er ging iets mis: " .mysqli_connect_error();
		exit(); }
		}else {
			echo 'Sorry, ik kon helaas geen verbinding maken met de database server ! ';
			exit(); }

?>