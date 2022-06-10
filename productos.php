<?php
include("conexionDB.php");
$sqll = "select * from productos";
$resultadoo = $conexion->query($query);
while ($row = $resultadoo->fetch_assoc());
?>