<?php

require_once('_conexion.php');

require_once('consultas/consultas_productos.php');



$id = $_GET['id'] ?? null;


if ($id) {
    deleteProducto($conexion, $id);
}

header('Location: listar_productos.php');



?>