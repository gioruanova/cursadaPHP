<?php

function obtenerUsuarios($rolAFiltrar = null)
{
    $lista = getJson('data/usuarios.json');

    if (is_null($rolAFiltrar)) {
        return $lista; // Devuelve todos los elementos si $categoria es null.
    }

    $usuariosFiltrados = [];

    foreach ($lista as $item) {
        if ($item['rol'] === $rolAFiltrar) {
            $usuariosFiltrados[] = $item;
        }
    }

    return $usuariosFiltrados;
}


function rolesUsuarios()
{
    $lista = obtenerUsuarios();
    $roles = [];

    foreach ($lista as $item) {
        $roles[] = $item['rol'];
    }

    // Eliminar duplicados
    $roles = array_unique($roles);

    return $roles;
}

?>