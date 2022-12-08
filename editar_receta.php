<?php
include("includes/bd.php");
include("includes/header_admin_login.php");
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $database->select("receta", "*", ["id" => $id]);
    if (count($result) == 1) {
        $nombre_receta = $result[0]['nombre_receta'];
        $t_preparacion = $result[0]['t_preparacion'];
        $t_coccion = $result[0]['t_coccion'];
        $porciones = $result[0]['porciones'];
        $complejidad = $result[0]['complejidad'];
        $categoria = $result[0]['categoria'];
        $ocasion = $result[0]['ocasion'];
        $descripcion = $result[0]['descripcion'];
        $lista_ingredientes = $result[0]['lista_ingredientes'];
        $i_preparacion = $result[0]['i_preparacion'];
        $img = $result[0]['img'];
    }
}
?>

<?php
if (isset($_POST['actualizar_receta'])) {
        $id = $_GET['id'];
        $nombre_receta = $_POST['nombre_receta'];
        $t_preparacion = $_POST['t_preparacion'];
        $t_coccion = $_POST['t_coccion'];
        $porciones = $_POST['porciones'];
        $complejidad = $_POST['complejidad'];
        $categoria = $_POST['categoria'];
        $ocasion = $_POST['ocasion'];
        $descripcion = $_POST['descripcion'];
        $lista_ingredientes = $_POST['lista_ingredientes'];
        $i_preparacion = $_POST['i_preparacion'];
        $img = $_POST['img'];

    $result = $database->update("receta", [
        "nombre_receta" => $nombre_receta,
        "t_preparacion" => $t_preparacion,
        "t_coccion" => $t_coccion,
        "porciones" => $porciones,
        "complejidad" => $complejidad,
        "categoria" => $categoria,
        "ocasion" => $ocasion,
        "descripcion" => $descripcion,
        "lista_ingredientes" => $lista_ingredientes,
        "i_preparacion" => $i_preparacion,
        "img" => $img
    ], [
        "id" => $id
    ]);

    if (!$result) {
        die("Query failed");
    }
    header("Location: ListaRecetas.php");
}

?>
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>EFIAMA</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/Style.css" />
</head>

  <section class="container">
    <form action="editar_receta.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data" class="row" style="margin-top: 5rem">
      <div class="col">
        <input type="text" name="nombre_receta" value="<?php echo $nombre_receta?>"
          class="mb-5 col-md-9 col-md-offset-4 form-text form-recipe form-control-lg align-self-center"
          placeholder="Nombre de la receta" />

        <div id="display-image" class="d-flex justify-content-center"></div>
        <div class="d-flex justify-content-center mt-5">
          <div class="form-control-lg">
            <input class="form-control" id="image-input"  name="fileTest" type="file" accept=".png, .jpg, .jpeg">
          </div>

          
        </div>
        
      </div>
      <div class="col">
        <h3 class="text-h3">Tiempo de Preparación:</h3>
        <input type="text" name="t_preparacion" class="col-8 form-text form-recipe form-control-lg" value="<?php echo $t_preparacion?>"/>
        <h3 class="text-h3">Tiempo de Cocción:</h3>
        <input type="text" name="t_coccion" class="col-8 form-text form-recipe form-control-lg" value="<?php echo $t_coccion?>"/>
        <h3 class="text-h3">Porciones:</h3>
        <input type="text" name="porciones" class="col-8 form-text form-recipe form-control-lg" value="<?php echo $porciones?>"/>
        <h3 class="text-h3">Nivel de complejidad:</h3>
        <select name="complejidad" id="complejidad" class="border-dark form-recipe form-control-lg col-8"
          aria-label="Seleccione un perfil">
          <option selected>Seleccione una opción</option>
          <option value="Fácil">Fácil</option>
          <option value="Intermedio">Intermedio</option>
          <option value="Avanzado">Avanzado</option>
        </select>
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
        <h3 class="text-h3">Ocasión:</h3>
        <select name="ocasion" id="ocasion" class="border-dark form-recipe form-control-lg col-8"
          aria-label="Seleccione un perfil">
          <option selected>Seleccione una opción</option>
          <option value="Todas">Todas</option>
          <option value="Cumpleaños">Cumpleaños</option>
          <option value="Dia del padre">Día del padre</option>
          <option value="Dia de la madre">Día de la madre</option>
          <option value="Dia del niño">Día del niño</option>
          <option value="Navidad">Navidad</option>
          <option value="Semana Santa">Semana Santa</option>
          <option value="Verano">Verano</option>
        </select>
      </div>

      <section class="mt-5 text-h3">
        <div class="form-group col-6 form-recipe">
          <h3 class="text-area">Descripción:</h3>
          <textarea name="descripcion" class="border-dark form-control" id="exampleFormControlTextarea1"
            rows="6" ><?php echo $descripcion?></textarea>
        </div>
        <div class="form-group col-6 form-recipe">
          <h3 class="text-area">Lista de ingredientes:</h3>
          <textarea name="lista_ingredientes" class="border-dark form-control" id="exampleFormControlTextarea1"
            rows="6" ><?php echo $lista_ingredientes?></textarea>
        </div>
        <div class="form-group col-6 form-recipe">
          <h3 class="text-area">Instrucciones de Preparación:</h3>
          <textarea name="i_preparacion" class="border-dark form-control" id="exampleFormControlTextarea1"
            rows="6" ><?php echo $i_preparacion?></textarea>
        </div>
      </section>

      <div class="form-group col-6 form-recipe">
        <input type="submit" value="Actualizar Receta" class="btn btn-success btn-block" name="actualizar_receta">
      </div>

    </form>
  </section>

  <?php 
  include("includes/footer.php");
  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="script.js"></script>
                            