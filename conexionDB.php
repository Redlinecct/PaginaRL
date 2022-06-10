<?php
$servername="localhost";
$user="root";
$password="";
$database="redline";

$conexion = mysqli_connect($servername, $user, $password, $database);
// Check connection
if (!$conexion) {
    die("Connection failed: " . mysqli_connect_error());
}
?>