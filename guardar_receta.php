<?php 
include("includes/bd.php");


if(isset($_POST['guardar_receta'])){

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
     

    $file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo

    $url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

    //dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
    $url_insert = dirname(__FILE__) . "/img"; //Carpeta donde subiremos nuestros archivos

    //Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
    $url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

    //Si la carpeta no existe, la creamos
    if (!file_exists($url_insert)) {
        mkdir($url_insert, 0777, true);
    };

    //movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
    if (move_uploaded_file($url_temp, $url_target)) {
        header('Location: AñadirReceta.php');
        echo '<script>alert("Hola")</script>';
    } else {
        header('Location: AñadirReceta.ph');
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
    }

    $resultado=$database->insert("receta",[
        "nombre_receta"=>$nombre_receta,
        "t_preparacion"=>$t_preparacion,
        "t_coccion"=>$t_coccion,
        "porciones"=>$porciones,
        "complejidad"=>$complejidad,
        "categoria"=>$categoria,
        "ocasion"=>$ocasion,
        "descripcion"=>$descripcion,
        "lista_ingredientes"=>$lista_ingredientes,
        "i_preparacion"=>$i_preparacion,
        "img"=>"img/".$file

    ]);
    
    if(!$resultado){
        die("Query failed");
    }
    
    header("location: AñadirReceta.php");
}

 
?>