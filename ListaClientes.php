<?php
  include("includes/header_admin_login.php");
  include("includes/bd.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EFIAMA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;500;600&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/Style.css" />
  </head>

  <body class="d-flex flex-column min-vh-100">

    <section class="container p-5 my-auto">
      <h3 class="pb-2 text-center mb-4 list-title">
        Lista de usuarios registrados
      </h3>
      <div class="table-responsive" id="no-more-tables">
        <table border="1" class="table bg-white text-center col-10">
          <thead class="bg-thead text-light tex">
            <tr>
              <th>Nombre</th>
              <th>Usuario</th>
              <th>Correo</th>
              <th>Fecha de Registro</th>
            </tr>
          </thead>
          <tbody>

            <?php
              $result = $database->select("usuario", "*");
              for ($i = 0; $i < count($result); $i++) {   ?>
            <tr>
              <td data-title="Nombre"><?php echo $result[$i]['nombre_completo'] ?></td>
              <td data-title="Usuario"><?php echo $result[$i]['nombre_usuario'] ?></td>
              <td data-title="Correo"><?php echo $result[$i]['correo'] ?></td>
              <td data-title="Fecha de Registro"><?php echo $result[$i]['fecha_registro'] ?></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </section>

    <?php 
    include("includes/footer.php");
    ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
