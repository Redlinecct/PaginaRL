<?php
    include("conexionDB.php");
    if (isset($_POST['btncrear'])) {
        if (strlen($_POST['name']) >= 1 && strlen($_POST['correo']) >= 1) {
            $name = $_POST['name'];
            $last = $_POST['apellidos'];
            $nacimiento = $_POST['fecha_na'];
            $email = $_POST['correo'];
            $password = $_POST['password'];
            $consulta = "INSERT INTO usuarios(name,apellidos,usuario,fecha_na, correo, password) VALUES ('$name','$last','$nacimiento',$email',$password)";
            $resultado = mysqli_query($conexion,$consulta);
            if ($resultado) {
                echo "<script> location='inicio_sesion.html' </script>";
                ?> 
               <?php
            } else {
                ?> 
                <h3 class="bad">¡Ups ha ocurrido un error!</h3>
               <?php
            }
        }   else {
                ?> 
                <h3 class="bad">¡Por favor complete los campos!</h3>
               <?php
        }
    }
?>