<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <title>Crear Sesion</title>
  <style>
    body{
      background: rgb(134, 128, 128);
    }
    .bg{
      background-image: url(img/fondo.png);
      background-position: center center;
    }
    .br{
      background: #fff;
    }
  </style>
</head>
<body >
  <div class="container w-70 mt-3 rounded my-3">
    <div class="row">
      <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
      </div>
      <div class="col br p-5 rounded-end">
        <div class="text-center mt-3">
          <img src="img/usuario.svg" alt="" style="width: 80px; height: 80px;">
        </div>
        <!--Inicio de sesion-->
          <h5 class="fw-bold text-center py-5 ">Crear sesion</h5>
          <form action="registrar.php" method="post">
              <div class="mb-4">
                <label for="name" class="form-label">Nombres</label> 
                <input type="text" name="name" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label for="last" class="form-label">Apellidos</label> 
                <input type="text" name="last" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label for="nacimiento" class="form-label">Fecha de nacimiento</label> 
                <input type="date" name="nacimiento" class="form-control" placeholder="">
              </div>
              <div class="mb-4">
                <label for="correo" class="form-label">Correo</label> 
                <input type="text" name="correo" class="form-control" placeholder="">
              </div>
              <div class="mb-4"> 
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="">
              </div> 
              <div class="d-grid grap-2" style="width: auto;">
                <input type="submit" value="Crear_Sesion" class="btn btn-outline-danger w-100"name="btncrear">
              </div>
              <div class="my-3">
                <span>¿Ya tienes cuenta? <a href="./inicio_sesion.html" class="outline text-danger">Iniciar Sesion</a></span> <br>
              </div>      
          </form> 
      </div> 
  </div>
</div>
  <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>