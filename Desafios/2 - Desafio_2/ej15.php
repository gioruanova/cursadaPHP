<?php

$lista_menu = [
    ['codigo' => 1, 'nombre' => 'Pizza con jamón y huevo', 'categoria' => 'Pizzas'],
    ['codigo' => 2, 'nombre' => 'Pizza napolitana', 'categoria' => 'Pizzas'],
    ['codigo' => 3, 'nombre' => 'Pizza caprese', 'categoria' => 'Pizzas'],
    ['codigo' => 4, 'nombre' => 'Ensalada caesar', 'categoria' => 'Ensaladas'],
    ['codigo' => 5, 'nombre' => 'Ensalada rusa', 'categoria' => 'Ensaladas'],
    ['codigo' => 6, 'nombre' => 'Coca cola', 'categoria' => 'Bebidas'],
    ['codigo' => 7, 'nombre' => 'Fanta', 'categoria' => 'Bebidas'],
    ['codigo' => 8, 'nombre' => 'Agua mineral', 'categoria' => 'Bebidas'],
    ['codigo' => 9, 'nombre' => 'Helado', 'categoria' => 'Postre'],
    ['codigo' => 10, 'nombre' => 'Flan casero', 'categoria' => 'Postre']
];


function buscarItemsPorCategoria($categoria, $lista)
{
    $resultados = array();

    foreach ($lista as $l) {
        if (strtolower($l['categoria']) === strtolower($categoria)) {
            $resultados[] = $l['nombre'] . "<br>";
        }
    }

    if (empty($resultados)) {
        echo "Categoria no encontrada";
    } else {
        foreach ($resultados as $l) {
            echo $l;
        }
    }

}

buscarItemsPorCategoria("bebidas", $lista_menu);

?>