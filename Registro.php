<?php
include("includes/header_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/Style.css" />
</head>

<body class="d-flex flex-column min-vh-100">


  <!--Cuerpo-->
  <section class="container-fluid my-lg-5 mx-auto my-auto">
    <div class="d-flex justify-content-center align-items-center mx-5 row">
      <div class="row px-xl-5 mx-5">
        <!--Campos de Registro-->
        <div class="col-lg-6 align-self-center red-text-register">

          <?php
          if (isset($_SESSION['mensaje'])) {
          ?>
            <div class="alert alert-<?php $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
              <?php $_SESSION['mensaje']; ?>
              <button type="button" class="close" data-dismiss="alert" arial-label="Close">
                <span arial-hidden="true">&times;</span>
              </button>
            </div>
          <?php session_unset();

          } ?>
          <h2 class="title d-flex justify-content-lg-start justify-content-center">Registrarse</h2>
          <form action="guardar_usuario.php" method="post" class="row text d-flex justify-content-lg-start justify-content-center needs-validation" novalidate>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" type="text" id="nombre" name="nombre_completo" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Nombre Completo</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" type="text" id="email" name="correo" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Correo
                Electrónico</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" type="text" id="usuario" name="nombre_usuario" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Nombre de
                Usuario</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" type="password" id="contraseña" name="contrasena" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Contraseña</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center">
              <button type="submit" value="Guardar usuario" class="btn red-space text-light btn-lg btn-block fw-bold w-75 my-4" name="guardar_usuario" onclick="verificar()">
                Registrarse
              </button>
            </div>
          </form>
        </div>

        <!--Imagen-->
        <div class="col-lg-6 d-none d-lg-block">
          <img class="img-rounded img-fluid" src="img/Registro.png" alt="Registrarse">
        </div>
      </div>
    </div>
  </section>

  <?php
  include("includes/footer.php");
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="script.js"></script>
</body>

</html>