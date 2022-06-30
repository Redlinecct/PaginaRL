<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="">
  <title>Red Line</title>
</head>
<style>
    .card{
      float:left;
      margin: 5px 10px;
      text-align: center; 
      width: 250px;
    }
    .card:hover{
      background:#fff;
    }
    .imagen{
      margin-left: 30px;
      height: 180px;
      width: 180px;
      display: block;
    }
  </style>
<body>
<?php 
include("modal_car.php");
include ("nav_car.php");
?>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container-fluid">
          <a href="Index.php" class="navbar-brand"><img style="max-width: 140px;" src="img/logoo.png" alt=""></a>
          <div class="input-group m-lg-0 w-50">
            <input type="search" class="form-control rounded" placeholder="" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-outline-dark">Buscar</button>
          </div>
          <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav ms-sm-4 ">
              <li class="nav-item"><a class="nav-link" href="sobre_nosotros.html">Sobre nosotros</a></li>
              <li class="nav-item"><a class="nav-link" href="inicio_sesion.html">Iniciar Sesion</a></li>
            </ul>
          </div>
        </div>
        <div><a class="nav-link" style="color:black" data-bs-target="#modal_cart" data-bs-toggle="modal"><i class="fas fa-shopping-cart"></i></a></li></div>
      </nav>
      <nav class="navbar navbar-expand-md navbar-light bg-light border-3 border-bottom border-danger ">
        <div class="container-fluid">
          <div id="menu" class="collapse navbar-collapse ">
            <ul class="navbar-nav ms-4">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>Camaras</small></a>
                <ul class="dropdown-menu border-danger" aria-labelledby="navbarDropdown">
                  <div class="col-4 w-100 border-danger">
                    <div class="list-group text-center" id="list-tab" role="tablist">
                      <a class="list-group-item list-group-item-action active " id="list-home-list" data-toggle="list" href="#2mpx" role="tab" aria-controls="home">2mpx</a>
                      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#4mpx" role="tab" aria-controls="profile">4mpx</a>
                      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">PTZ</a>
                      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">wifi</a>
                    </div>
                  </div>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>Dvr</small></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a href="" class="dropdown-item"></a></li>
                </ul>
              </li>
              <li class="nav-menu-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>Controles de acceso</small></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a href="" class="dropdown-item">sadasd</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>Reflector</small></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a href="" class="dropdown-item">sadasd</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><small>Cables</small></a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a href="" class="dropdown-item">sadasd</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <nav>
        <div id="carouselExampleControls" class="carousel slide m-3" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active w-100">
              <img src="img/fondo.png" class="d-block w-100" style="height: 500px;" alt="banner 1">
            </div>
            <div class="carousel-item">
              <img src="img/fondo.png" class="d-block w-100" style="height: 500px;" alt="banner 2">
            </div>
            <div class="carousel-item">
              <img src="img/fondo.png" class="d-block w-100" style="height: 500px;" alt="banner 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </nav>
  </header>
  <div class="col-12">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="2mpx" role="tabpanel" aria-labelledby="list-home-list">
      <?php include("conexionDB.php");
      $query = "select * from productos where resolucion='1080p'";
      $resultadoo = mysqli_query($conexion,$query);
      while ($row = mysqli_fetch_assoc($resultadoo)) {;
      ?>
      <form action="carro.php" method="POST" name="formulario" id="formulario">
        <div class="text-content">
          <input type="hidden" name="id" id="id" value=" <?php echo $row['id']?>"/>
          <input type="hidden" name="marca" id="marca" value=" <?php echo $row['marca']?>"/>
          <input type="hidden" name="resolucion" id="resolucion" value=" <?php echo $row['resolucion']?>"/>
          <input type="hidden" name="tipo" id="tipo" value=" <?php echo $row['tipo']?>"/>
          <input type="hidden" name="precio" id="precio" value=" <?php echo $row['precio']?>"/>
          <input type="hidden" name="cantidad" id="cantidad" value="1" class="pl-2"/>
        </div>
      <div class="card" aling="center">
        <img src="<?php echo $row['imagen']?> "  class="imagen"alt="">
        <div class="card-body">
        <ul class="list-group">
         <li class="list-group-item bg-light"> <b class=""> <?php echo $row['marca']?></b></li>
         <li class="list-group-item "><p> Resolucion: <?php echo $row['resolucion']?></p></li>
         <li class="list-group-item bg-light"><p>Tipo: <?php echo $row['tipo']?></p></li>
        </ul>
        <h3> <?php echo $row['precio']?></h3>
        <div class="d-grid gap-3 m-2">
        <button class="btn btn-outline-danger" type="submit"><i class="fas fa-shopping-cart"></i> Añadir a carrito</button>
        </div>
      </div>
    </div>
      </form>
    </div>
      <?php } ?>
      </div>
      <div class="tab-pane fade" id="4mpx" role="tabpanel" aria-labelledby="list-profile-list">
      <?php include("conexionDB.php");
      $query = "select * from productos where resolucion='2560'";
      $resultadoo = mysqli_query($conexion,$query);
      while ($row = mysqli_fetch_assoc($resultadoo)) {;
      ?>
      <div class="container">
      <div class="card " aling="center">
        <img src="<?php echo $row['imagen']?> " class="imagen"alt="">
        <div class="card-body">
        <ul class="list-group">
         <li class="list-group-item bg-light"> <b class=""> <?php echo $row['marca']?></b></li>
         <li class="list-group-item "><p> Resolucion: <?php echo $row['resolucion']?></p></li>
         <li class="list-group-item bg-light"><p>Tipo: <?php echo $row['tipo']?></p></li>
        </ul>
        <h3> <?php echo $row['precio']?></h3>
        <div class="d-grid gap-3 m-2">
        <button class="btn btn-outline-danger" type="button">Añadir a carrito</button>
        </div>
      </div>
    </div>
      </div>
      <?php } ?>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">...</div>
      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">.asd..</div>
    </div>
  </div>
  </div>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>