<?php 
  include("includes/header_login.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recuperar Cuenta</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/Style.css" />
</head>

<body class="d-flex flex-column min-vh-100">
  <!--Cuerpo-->
  <section class="container-fluid my-lg-5 mx-auto my-auto">
    <div class="d-flex justify-content-center align-items-center mx-5 row">
      <div class="row px-xl-5 mx-5">
        <!--Campos de Registro-->
        <div class="col-lg-6  align-self-center red-sub-title">
          <h2 class="title d-flex justify-content-lg-start justify-content-center">Recuperación</h2>
          <form action="Recuperar_Usuario.php" method="post"
            class="row text d-flex justify-content-lg-start justify-content-center needs-validation" novalidate>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" name="correo" type="text"
                required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Correo Electrónico</span>
              <p class="valid-feedback"></p>
            </div>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" name="contrasena" type="password"
                required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Nueva Contraseña</span>
              <p class="valid-feedback"></p>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center">
              <input type="submit" value="Actualizar usuario" class="btn btn-success btn-block" name="actualizar">
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="script.js"></script>
</body>

</html>