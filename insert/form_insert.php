<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>

<body>

    <div class="container-fluid bg-primary mb-3">
        <h1 class="text-white text-center">NUEVO USUARIO</h1>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">REGISTRAR USUARIO</h5>
                        <form action="insert.php" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad</label>
                                <input type="text" class="form-control" id="edad" name="edad" required>
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" id="correo" name="correo" required>
                            </div>
                            <div class="mb-3">
                                <label for="clave" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="clave" name="clave" required>
                            </div>
                            <div class="mb-3">
                                <input type="hidden" name="oculto" value="1">
                            </div>
                            <div class="mt-3">
                                <a type="button" href="../index.php" class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Registrar</button>
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