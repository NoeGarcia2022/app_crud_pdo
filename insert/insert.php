<?php
// prueba de envio de datos
//print_r($_POST);
if (!isset($_POST['oculto'])) {
    exit();
}

// conexion
include '../model/conexion.php';

// campos del fromulario para insertar registros
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$clave = $_POST['clave'];

// sentencia sql para insertar en la bd
$sentencia = $db->prepare("INSERT INTO tb_datos(nombre,apellidos,edad,correo,clave) 
                                    VALUES (?,?,?,?,?)");
$resultado = $sentencia->execute([$nombre, $apellidos, $edad, $correo, $clave]);

// validacion de redireccion 
if ($resultado === TRUE) {
    header('Location:../index.php');
} else {
    echo 'error de insertar datos';
}
