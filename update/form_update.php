<?php
// prueba de envio de datos
// print_r($_GET);

// validar datos no vacios
if (!isset($_GET['id'])) {
    header('Location:../index.php');
}

// conexion de bd
include '../model/conexion.php';

// sentencia sql select sql
$id = $_GET['id'];
$sentencia = $db->prepare("SELECT * FROM tb_datos WHERE id=?");

$resultado = $sentencia->execute([$id]);
$persona = $sentencia->fetch(PDO::FETCH_OBJ);

// prueba
// print_r($persona);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid bg-primary mb-3">
        <h1 class="text-white text-center">ACTUALIZAR USUARIO</h1>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR USUARIO</h5>
                        <form action="update.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $persona->nombre; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?php echo $persona->apellidos; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad" value="<?php echo $persona->edad; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $persona->correo; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="clave" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="clave" name="clave" value="<?php echo $persona->clave; ?>" required>
                            </div>
                            <input type="hidden" name="oculto">
                            <input type="hidden" name="id" value="<?php echo $persona->id; ?>">
                            <div class="mt-3">
                                <a type="button" href="../index.php" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

<script src="js/bootstrap.min.js"></script>

</html>