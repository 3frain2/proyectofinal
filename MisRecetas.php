<?php 
include("includes/header.php");
include("session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis recetas</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Style.css">
</head>
</head>
<body>

    <section class="container-fluid">
        <h1 class="red-sub-title text-center pt-5">Mi colección de recetas</h1>
    <?php 
      $misrecetas=$database->select("usuario_has_receta", "*", ["usuario_nombre_usuario" => $login_session]);
    ?>
    <div class="row">
    <?php 
    for ($i = 0; $i < count($misrecetas); $i++) {
    ?>
      <?php 
        $result=$database->select("receta", "*", ["id" => $misrecetas[$i]['receta_id']]);
      ?>
      <div class="col-4">
          <div class=" overflow-hidden text-center d-flex justify-content-center align-items-center">
              <div class="card" style="width:23rem;">
                  <form action="guardar_misrecetas.php" method="post">
                      <h1 class="xs-sub-title"><?php echo $result[0]['nombre_receta'] ?></h1>
                      <a href="receta.php?id=<?php echo $result[0]['id'];?>"><img width="370" height="250" src=<?php echo $result[0]['img']?> class="card-img-top"
                              alt="foto"></a>
                      <div class="card-body red-space">
                          <p class="card-text xs-sub-title-white text-center">Detalles</p>
                          <p class="card-text xs-sub-title-white text-center">
                              Dificultad: <?php echo $result[0]['complejidad'] ?> <br>
                              Duración: <?php echo $result[0]['t_preparacion'] ?> <br>
                              Categoría: <?php echo $result[0]['categoria'] ?> <br>
                              Ocasión: <?php echo $result[0]['ocasion'] ?> <br>
                          </p>
                          <img class="img-fluid line" src="img/linea.png" alt="division">
                          <ul style="padding-left: 0px;">
                              <input type="hidden" name="id" value="<?php echo $result[0]['id'];?>"></input>
                              <input type="submit" class="btn btn-outline-light" name="guardar_misrecetas" value="Agregar"> 
                                <?php
                                $existe= $database->select("usuario_has_receta", "*", ["usuario_nombre_usuario"=>$login_session, "receta_id"=>$result[0]['id']]);
                                if(!$existe) {
                                ?>
                                    <p style="padding-left: 0px; margin-top: 0.5rem" class="small-text-like heart text-center d-flex justify-content-center align-items-center" href="#"><img class="img-fluid heart" src="img/corazon.png" alt=""><?php echo $result[0]['like'];?></p>
                                <?php
                                }
                                else {
                                ?>
                                    <p style="padding-left: 0px; margin-top: 0.5rem" class="small-text-like heart text-center d-flex justify-content-center align-items-center" href="#"><img class="img-fluid heart" src="img/corazon_like.png" alt=""><?php echo $result[0]['like'];?></p>
                                
                                <?php  
                                }
                                ?>
                              </input>
                          </ul>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <?php
    }
    ?>
    </section>

    <?php 
    include("includes/footer.php");
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>