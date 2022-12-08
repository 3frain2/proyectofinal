<?php
include("includes/bd.php");
include "mcript.php";
?>

<?php
    if (isset($_POST['actualizar'])) {
        $correo = $_POST['correo'];
        $nombre_usuario = $_POST['nombre_usuario'];
        $nombre_completo = $_POST['nombre_completo'];
        $contrasena = $encriptar($_POST['contrasena']);
        $fecha_registro = $_POST['fecha_registro'];

        $result = $database->update("usuario", [
            "contrasena" => $contrasena
        ], [
            "correo" => $correo
        ]);

        if (!$result) {
            die("Query failed");
        }

        header("Location: Sesion.php");
    }
?>