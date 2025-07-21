<?php

session_start();
error_reporting(0);

$username = 'root';
$password '';
$host 'localhost';
$database = 'daveyraaijmakers';

if(mysql_connect($host, $username, $password)) {
    if(!mysql_select_db($database)) {
        echo 'Sorry, ik kon helaas geen verbinding maken met database tablel!';
        exit();

    }
}else {
        echo 'Sorry, ik kon helaas geen verbinding maken met databaseserver!';
        exit();
}

function login (){
    if (isset($_SESSION['login'])){
        echo 'Welcome';
    }else{
        if (isset($_POST['submit'])){
            $db_login = mysql_query("SELECT * FROM 'login' WHERE 'loginGB' = '$POST['userName']' AND 'loginPass' = '$POST['userPass']'" );
            if (mysql_num_rows($db_login) ==1){
                echo 'Welcome';
                $_SESSION['login'] =1;
            }else{
                echo 'Uw gegevens komen niet overeen';
            }
        }
  ?>    
