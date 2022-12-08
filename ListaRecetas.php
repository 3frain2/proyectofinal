<?php
include_once("includes/bd.php");
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

  <body>

    <section class="container p-5">
      <h3 class="pb-2 text-center mb-4 list-title">Lista de recetas</h3>
      <div class="table-responsive" id="no-more-tables">
        <table border="1" class="table bg-white text-center">
          <thead class="bg-thead text-light tex">
            <tr>
              <th>Receta</th>
              <th>Usuario</th>
              <th>Categoria</th>
              <th>Detalles</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <?php
              $result = $database->select("receta", "*");
              for ($i = 0; $i < count($result); $i++) {   ?>
            <tr>
              <td data-title="Receta"><?php echo $result[$i]['nombre_receta'] ?></td>
              <td data-title="Usuario">Administrador</td>
              <td data-title="Categoría"><?php echo $result[$i]['categoria'] ?></td>
              <td data-title="Detalles"><a href="Receta.php?id=<?php echo $result[$i]['id'];?>">Ver mas</a></td>
              <td data-title="Editar"><a href="editar_receta.php?id=<?php echo $result[$i]['id'];?>">Editar</a></td>
              <td data-title="Eliminar"><a href="eliminar_receta.php?id=<?php echo $result[$i]['id'];?>">Eliminar</a></td>
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
