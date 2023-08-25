<?php
// prueba
// print_r($_GET);

if (!isset($_GET['id'])) {
    header('Location:../index.php');
}

// conexion de bd
include '../model/conexion.php';

$eliminarRegistro = $_GET['id'];

// sentencia sql para eliminar registros
$sentencia = $db->prepare("DELETE FROM tb_datos WHERE id=?;");
$resultado = $sentencia->execute([$eliminarRegistro]);

// validacion de redireccion 
if ($resultado === true) {
    header('Location:../index.php');
} else {
    echo "Error al eliminar registro";
}
