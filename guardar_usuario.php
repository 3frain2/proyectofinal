<?php 
include("includes/bd.php");
include "mcript.php";

if(isset($_POST['guardar_usuario'])){
    $nombre_usuario= $_POST['nombre_usuario'];
    $correo= $_POST['correo'];
    $nombre_completo= $_POST['nombre_completo'];
    $contrasena= $encriptar($_POST['contrasena']);
    $fecha_registro= date("Y-m-d H:i:s");

    $resultado=$database->insert("usuario",[
        "nombre_usuario"=>$nombre_usuario,
        "correo"=>$correo,
        "nombre_completo"=>$nombre_completo,
        "contrasena"=>$contrasena,
        "fecha_registro"=>$fecha_registro
    ]);

    if(!$resultado){
        die("Query failed");
    }
    header("location: Sesion.php");

        $_SESSION['mensaje']="Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo']='success';
        
}


?>