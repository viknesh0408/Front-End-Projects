<?php

$a = $_POST["firstname"];
$b = $_POST["secondname"];
$c = $_POST["email"];
$d = $_POST["phnumber"];
$e = $_POST["password"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";


$con = new mysqli($servername, $username, $password, $dbname);
$con->query("insert into reg values('".$a."','".$b."','".$c."','".$d."','".$e."')");

echo "Register successfully";
?>