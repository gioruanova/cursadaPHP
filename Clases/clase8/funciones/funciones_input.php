<?php

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validarProductos($producto)
{
    $errores = [];

    if (empty($producto['nombre'])) {
        $errores[] = 'El nombre es mandatorio';
    }

    if (empty($producto['precio'])) {
        $errores[] = 'El precio es mandatorio';
    }

    if ($producto['descuento'] == 0) {
        $producto['descuento'] = 0;
    } elseif (empty($producto['descuento'])) {
        $errores[] = 'El descuento es mandatorio';
    }


    if (empty($producto['categoria'])) {
        $errores[] = 'La categoria es mandatoria';
    }

    if (empty($producto['descripcion'])) {
        $errores[] = 'La descripcion es mandatoria';
    }

    return $errores;
}

?>