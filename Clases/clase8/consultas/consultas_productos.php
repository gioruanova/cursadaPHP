<?php

// CONEXION
function getProductos(PDO $conexion)
{
    $consulta = $conexion->prepare('
        SELECT id, nombre, precio, descuento, categoria, descripcion FROM productos
    '); // preparo la consulta
    $consulta->execute(); // ejecuto consulta
    $productos = $consulta->fetchAll(PDO::FETCH_ASSOC); // recupero la lista
    return $productos;
}


// AGREGAR NUEVO PRODUCTO
function addProducto(PDO $conexion, $producto)
{
    $consulta = $conexion->prepare('
        INSERT INTO productos(nombre, descripcion, precio, descuento, categoria)
        VALUES(:nombre, :descripcion, :precio, :descuento, :categoria)
');

    $consulta->bindValue(':nombre', $producto['nombre']);
    $consulta->bindValue(':descripcion', $producto['descripcion']);
    $consulta->bindValue(':precio', $producto['precio']);
    $consulta->bindValue(':descuento', $producto['descuento']);
    $consulta->bindValue(':categoria', $producto['categoria']);

    $consulta->execute();
}

// MOSTRAR PRODUCTO POR ID
function getProductoById(PDO $conexion, $id)
{

    $consulta = $conexion->prepare('
        SELECT id, nombre, precio, descuento, categoria, descripcion
        FROM productos
        WHERE id = :id
    ');

    $consulta->bindValue(':id', $id);

    $consulta->execute();
    $productos = $consulta->fetch(PDO::FETCH_ASSOC); // fetch simple, no all
    return $productos;

}



function updateProducto(PDO $conexion, $producto)
{
    $consulta = $conexion->prepare('
        UPDATE productos
        SET
            nombre = :nombre,
            descripcion = :descripcion,
            precio = :precio,
            descuento = :descuento,
            categoria = :categoria
        WHERE id = :id
');

    $consulta->bindValue(':nombre', $producto['nombre']);
    $consulta->bindValue(':descripcion', $producto['descripcion']);
    $consulta->bindValue(':precio', $producto['precio']);
    $consulta->bindValue(':descuento', $producto['descuento']);
    $consulta->bindValue(':categoria', $producto['categoria']);
    $consulta->bindValue(':id', $producto['id']);

    $consulta->execute();

}


?>