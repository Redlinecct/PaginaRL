<?php
    include("conexionDB.php");
    $corr = $_POST['correo'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo='$corr'";

    $resultado = mysqli_query($conexion,$sql);

    while ($row = mysqli_fetch_array($resultado)){
        $correo = $row['correo'];
        $pass = $row['password'];
    }
    if ($corr == $correo && $password == $pass) {
        echo "<script>  alert ('Bienvenido'); window.location='Index.php' </script>";
    }else{
        echo "<script>";
        echo "alert ('Datos incorrectos')";
        echo  "</script>";
        include'inicio_sesion.html';
    }
?>