<?php
  include("includes/header_login.php");
  include("includes/bd.php");
  include "mcript.php";
  session_start();

  if (isset($_POST['login'])) {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    $user = $database->select("usuario", "*", ["nombre_usuario" => $nombre_usuario]);

    if (count($user) > 0) {
      if ($desencriptar($user[0]['contrasena']) === $contrasena) {
        $_SESSION['login_user'] = $nombre_usuario;
        header("location: Inicio.php");
      } else {
        $error = "Error en la contraseña";
        echo '<script language="javascript">alert("';
        echo $error;
        echo '");</script>';
      }
    } else {
      $error = "Usuario invalido";
      echo '<script language="javascript">alert("';
      echo $error;
      echo '");</script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Iniciar Sesión</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/Style.css" />
</head>

<body class="d-flex flex-column min-vh-100">

  <!--Cuerpo-->
  <section class="container-fluid my-lg-5 mx-auto my-auto">
    <div class="d-flex justify-content-center align-items-center mx-5 row ">
      <div class="row px-xl-5 mx-5">
        <!--Campos de Registro-->
        <div class="col-lg-6 align-self-center red-sub-title">
          <h2 class="title d-flex justify-content-lg-start justify-content-center">Iniciar Sesión</h2>
          <form action="" method="post" class="row text d-flex justify-content-lg-start justify-content-center needs-validation" novalidate>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" name="nombre_usuario" type="text" id="nombre" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Nombre
                de
                Usuario</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="w-75">
              <input class="form-control form-space input-space static-text text-lg-start text-center" name="contrasena" type="password" id="contraseña" required>
              <span class="noclick msg d-flex justify-content-lg-start justify-content-center">Contraseña</span>
              <p class="valid-feedback">
              </p>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center">
              <a class="" href="Recuperar.php">Recuperar Cuenta</a>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center">
              <button class="btn red-space text-light btn-lg btn-block fw-bold w-75 my-5" name="login" type="submit" onclick="verificar()">
                Iniciar Sesión
              </button>
            </div>
            <div class="d-flex justify-content-lg-start justify-content-center">
            <div>
              <p class="d-flex justify-content-lg-start justify-content-center">¿No tienes cuenta? </p>
              <a class="d-flex justify-content-lg-start justify-content-center" href="Registro.php">Crear Cuenta</a>
            </div>  
        </div>
          </form>
        </div>

        <!--Imagen-->
        <div class="col-lg-6 d-none d-lg-block">
          <img class="img-rounded img-fluid" src="img/Registro.png" alt="Iniciar Sesión">
        </div>
    </div>
  </section>



  <?php
  include("includes/footer.php");
  ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>

</html>