<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
    
}
?>
<html xmlns="http://www.w3.org/1999/xhtml" version="XHTML+RDFa 1.0" xmlns:og="http://ogp.me/nsindex.html" xml:lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="background"><br>
  <div style="float: right; " class=" ">
    <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
    contraseña</a> -->
    <?php if ($_SESSION["id"] == '4'): ?>
    <a href="crud/index.php" class="btn btn-success" style="color: white;display: inline-block;">Ver Usuarios</a>
    <a href="register.php" class="btn btn-warning" style="color: white;display: inline-block;">Registrar</a>
    <?php endif; ?>
    <a href="logout.php" class="btn btn-danger" style="color: white;display: inline-block;">Salir</a>

    <!-- <a href="reset-password.php" class="btn btn-warning" style="color: white;">Cambia tu
    contraseña</a> -->
  </div><br><br>
  <div class="container p-4">
      <div class="row">
     
        <div class="col-md-9 col-md">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="caratula2.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Fabulas de Esopo</h5>
            <a href="catalogo_trueColors.php" class="btn btn-primary">Fabulas de Esopo</a>
          </div>
        </div>
      </div>
     
      <div class="col-md-3 col-md">
        <div class="card" style="width: 14rem;text-aling:center;">
          <img class="card-img-top" src="caratula.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libros 3 Primaria</h5>
            <a href="catalogo_Everybody.php" class="btn btn-primary">Temario 1</a>
          </div>
        </div>
      </div>      
  </div>
  <!-- <div class="container p-4">
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="caratula.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Basico A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookBasic_B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Basico B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookBasic_B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_1A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_1A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
       <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_1B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_1B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
    </div><hr>
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_2A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_2A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_2B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_2B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_3A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_3A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_3B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_3B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div><hr>
    <div class="row">
      <div class="col-md-4 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_4A/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4-A</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_4A/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="bookStudent_4B/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4-B</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="bookStudent_4B/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
      <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_1/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_1/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_1wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 1 WP </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_1wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_2/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_2/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_2wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 2 wp</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_2wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div><hr>
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_3/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_3/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_3wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 3 WP </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_3wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_4/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4 </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_4/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_4wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 4 WP </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_4wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div><hr>
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_5/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 5 </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_5/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_5wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 5 WP </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_5wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_6/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 6 </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_6/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_6wp/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro 6 WP </h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_6wp/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div><br>
      </div>
    </div><hr>
    <div class="row">
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_Starter/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Starter</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_Starter/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm">
        <div class="card" style="width: 14rem;">
          <img class="card-img-top" src="Everybody_Starter 2/files/mobile/1.jpg" alt="libro" style="width: 100%;">
          <div class="card-body">
            <h5 class="card-title">Libro Starter 2</h5>
            <p class="card-text">Acceso a libro y audio.</p>
            <a href="Everybody_Starter 2/index.php" class="btn btn-primary">Ver Libro</a>
          </div>
        </div>
      </div>
  
    </div><hr>


     

    </div>
    <hr>
  </div> -->
</body>

</html><style>
  .background{
        background-size: cover;
        /* height: 100% !important; */
        background-image: url("files/extfiles/background.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
    }
</style>