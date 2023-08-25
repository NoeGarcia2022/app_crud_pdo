<?php

// propiedades de host
$pass = '';
$user = 'root';
$dbname = 'db_crud';

try {
    $db = new PDO(
        'mysql:host=localhost;dbname=' . $dbname,
        $user,
        $pass
    );
} catch (PDOException $e) {
    echo 'error de conexion' . $e->getMessage();
    die();
}
