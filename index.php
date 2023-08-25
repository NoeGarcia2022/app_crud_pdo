<?php
// Incluir conexion de bd
include "model/conexion.php";

//Sentencia SQL select
$sentencia = $db->query("SELECT * FROM tb_datos");
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($dato);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid bg-primary mb-3">
        <h1 class="text-white text-center">LISTA DE REGISTROS</h1>
    </div>

    <div class="container table-responsive-lg">
        <a href="insert/form_insert.php" class="btn btn-outline-primary mb-3">Nuevo Registro</a>

        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">EDAD</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">CONTRASEÑA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <!-- inicio foreach -->
                <?php
                foreach ($dato as $registro) { ?>
                    <tr>
                        <td><?php echo $registro->id; ?></td>
                        <td><?php echo $registro->nombre; ?></td>
                        <td><?php echo $registro->apellidos; ?></td>
                        <td><?php echo $registro->edad; ?></td>
                        <td><?php echo $registro->correo; ?></td>
                        <td><?php echo $registro->clave; ?></td>
                        <td>
                            <a href="update/form_update.php?id=<?php echo $registro->id; ?>" class="btn btn-outline-success">EDITAR</a>
                            <a href="delete/delete.php?id=<?php echo $registro->id; ?>" class="btn btn-outline-danger">ELIMINAR</a>
                        </td>
                    </tr>
                    <!-- fin foreach -->
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

</body>

<script src="js/bootstrap.min.js"></script>

</html>