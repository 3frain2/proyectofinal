<?php 
  include("includes/bd.php");
  include("includes/header.php");
  include("session.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/Style.css">

</head>

<body>


    <!--TITULO-->
    <div class="top-bg">
        <section class="container-fluid">
            <h1 class="top-title text-white">Deliciosas recetas <br> para cada <br> ocasión</h1>
        </section>
    </div>


    <!--CARRUSEL-->
    <section id="carrusel" class="container-fluid">
        <h1 class="sub-title text-center">Top 10 recetas más votadas</h1>
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
            <div class="carousel-inner">

            
        <?php  
        $result=$database->select("receta", "*", ["ORDER" => ["like" => "DESC"]]);
        ?>
        
            <?php 
            for ($i = 0; $i < count($result) and $i < 10; $i++) {
            ?>  
                <?php 
                if($i == 0) {
                ?>
                    <div class="carousel-item active">
                <?php 
                }
                else {
                ?>
                    <div class="carousel-item">
                <?php
                }
                ?>
                
                    <div class=" overflow-hidden text-center d-flex justify-content-center align-items-center">
                        <div class="card" style="width:23rem;">
                            <form action="guardar_misrecetas.php" method="post">
                                <h1 class="xs-sub-title"><?php echo $result[$i]['nombre_receta'] ?></h1>
                                <a href="receta.php?id=<?php echo $result[$i]['id'];?>"><img width="370" height="250" src=<?php echo $result[$i]['img']?> class="card-img-top"
                                        alt="foto"></a>
                                <div class="card-body red-space">
                                    <p class="card-text xs-sub-title-white text-center">Detalles</p>
                                    <p class="card-text xs-sub-title-white text-center">
                                        Dificultad: <?php echo $result[$i]['complejidad'] ?> <br>
                                        Duración: <?php echo $result[$i]['t_preparacion'] ?> <br>
                                        Categoría: <?php echo $result[$i]['categoria'] ?> <br>
                                        Ocasión: <?php echo $result[$i]['ocasion'] ?> <br>
                                    </p>
                                    <img class="img-fluid line" src="img/linea.png" alt="division">
                                    <ul style="padding-left: 0px;">
                                        <input type="hidden" name="id" value="<?php echo $result[$i]['id'];?>"></input>
                                        <input type="submit" class="btn btn-outline-light" name="guardar_misrecetas" value="Agregar"> 
                                        <?php
                                        $existe= $database->select("usuario_has_receta", "*", ["usuario_nombre_usuario"=>$login_session, "receta_id"=>$result[$i]['id']]);
                                        if(!$existe) {
                                        ?>
                                            <p style="padding-left: 0px; margin-top: 0.5rem" class="small-text-like heart text-center d-flex justify-content-center align-items-center" href="#"><img class="img-fluid heart" src="img/corazon.png" alt=""><?php echo $result[$i]['like'];?></p>
                                        <?php
                                        }
                                        else {
                                        ?>
                                            <p style="padding-left: 0px; margin-top: 0.5rem" class="small-text-like heart text-center d-flex justify-content-center align-items-center" href="#"><img class="img-fluid heart" src="img/corazon_like.png" alt=""><?php echo $result[$i]['like'];?></p>
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

            </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

    </section>


    <!--MÁS RECETAS-->

    <section class="container-fluid">

        <h1 class="sub-title text-center mt-5" id="Filtros">Descubre más recetas</h1>

        <form action="" method="post" enctype="multipart/form-data" class="row" style="margin-top: 5rem">
            <h3 class="text-h3">Categoría:</h3>
            <select name="categoria" id="categoria" class="border-dark form-recipe form-control-lg col-8"
                aria-label="Seleccione un perfil">
                <option selected>Seleccione una opción</option>
                <option value="Desayunos">Desayunos</option>
                <option value="Bebidas">Bebidas</option>
                <option value="Entradas">Entradas</option>
                <option value="Almuerzo">Almuerzo</option>
                <option value="Postres">Postres</option>
                <option value="Sopas">Sopas</option>
            </select>


            <div class="form-group col-6 form-recipe">
                <input type="submit" value="Buscar" class="btn btn-success btn-block" name="filtro"
                    href="MisRecetas.php">
            </div>
        </form>
        <?php 
if(isset($_POST['filtro'])) {
  $categoria = $_POST['categoria'];
  $result=$database->select("receta", "*", ["categoria" => $categoria]);
  ?>
        <div class="row">
            <?php 
  for ($i = 0; $i < count($result); $i++) {
  ?>
    <div class="col-4">
        <div class=" overflow-hidden text-center d-flex justify-content-center align-items-center">
            <div class="card" style="width:23rem;">
                <form action="guardar_misrecetas.php" method="post">
                    <h1 class="xs-sub-title"><?php echo $result[$i]['nombre_receta'] ?></h1>
                    <a href="receta.php?id=<?php echo $result[$i]['id'];?>"><img width="370" height="250" src=<?php echo $result[$i]['img']?> class="card-img-top"
                            alt="foto"></a>
                    <div class="card-body red-space">
                        <p class="card-text xs-sub-title-white text-center">Detalles</p>
                        <p class="card-text xs-sub-title-white text-center">
                            Dificultad: <?php echo $result[$i]['complejidad'] ?> <br>
                            Duración: <?php echo $result[$i]['t_preparacion'] ?> <br>
                            Categoría: <?php echo $result[$i]['categoria'] ?> <br>
                            Ocasión: <?php echo $result[$i]['ocasion'] ?> <br>
                        </p>
                        <img class="img-fluid line" src="img/linea.png" alt="division">
                        <ul style="padding-left: 0px;">
                            <input type="hidden" name="id" value="<?php echo $result[$i]['id'];?>"></input>
                            <input type="submit" class="btn btn-outline-light" name="guardar_misrecetas" value="Agregar"> 
                            <?php
                            $existe= $database->select("usuario_has_receta", "*", ["usuario_nombre_usuario"=>$login_session, "receta_id"=>$result[$i]['id']]);
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
}
  ?>

    </section>

    <?php 
  include("includes/footer.php");
  ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>