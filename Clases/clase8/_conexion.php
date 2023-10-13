<?php
// mysqli(); // Solo sirve para MYSQL
try {
    $conexion = new PDO(
        'mysql:host=localhost;dbname=restaurant;charset=utf8;port=3306',
        'root',
        ''
    );

} catch (PDOException $e) {
    echo "Error en conexion DB";
}
?>