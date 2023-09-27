<?php

$a = $_POST["username"];
$b = $_POST["password"];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";


$con = new mysqli($servername, $username, $password, $dbname);
$con->query("insert into log values('".$a."','".$b."')");

echo "Login successfully";
?>