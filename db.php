<?php 
$server = "localhost";
$user = "root";
$pass = "root";
$database = "clickmaster";

$connection = new mysqli($server, $user, $pass, $database);

if ($connection->connect_error) {
    die("Connection failed:" . $connection->connect_error);
}

$prueba = "Hola";
?>