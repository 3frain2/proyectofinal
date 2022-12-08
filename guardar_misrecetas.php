<?php 
include("includes/bd.php");
include("session.php");

if(isset($_POST['guardar_misrecetas'])){
    $nombre_usuario= $login_session;
    $id= $_POST['id'];

    $resultado= $database->select("usuario_has_receta", "*", ["usuario_nombre_usuario" => $nombre_usuario]);
    $insertado = 0;
    $contador = 0;
    
    while(count($resultado) > $contador) {
      if ($resultado[$contador]['usuario_nombre_usuario'] == $login_session and $resultado[$contador]['receta_id'] == $id) {
        $insertado = 1;
      }
        $contador += 1;
    }

    if($insertado == 0) {
        $resultado = $database->insert("usuario_has_receta",[
            "usuario_nombre_usuario"=>$nombre_usuario,
            "receta_id"=>$id,
        ]);

        $receta= $database->select("receta", "*", ["id" => $id]);
        $resultado = $database->update("receta", [
            "like" => $receta[0]['like'] + 1
        ], [
            "id" => $id
        ]);
    }
    else {
        $resultado= $database->delete("usuario_has_receta",["usuario_nombre_usuario"=>$nombre_usuario, "receta_id"=>$id]);
        $receta= $database->select("receta", "*", ["id" => $id]);
        $resultado = $database->update("receta", [
            "like" => $receta[0]['like'] - 1
        ], [
            "id" => $id
        ]);
    } 
    
    if(!$resultado){
        die("Query failed");
    }

    header("location: MisRecetas.php");
}
?>