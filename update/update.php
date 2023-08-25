<?php
// verificar el envio de datos
// print_r($_POST);

if (!isset($_POST['oculto'])) {
    header('Location:../index.php');
}

// conexion de nuestra bd
include '../model/conexion.php';

// datos actualizados que se mandan de nuestro form
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

// sentencia sql para insertar datos actualizados 
$sentencia = $db->prepare("UPDATE tb_datos SET nombre=?,apellidos=?,edad=?,correo=?,clave=? WHERE id=?;");

$resultado = $sentencia->execute([$nombre, $apellidos, $edad, $correo, $clave, $id]);

// validar una redireccion en caso que se actualizen los datos 
if ($resultado === true) {
    header('Location:../index.php');
} else {
    echo "Error al actualizar los datos";
}
