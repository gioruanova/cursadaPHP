<?php

require_once('funciones/funciones_data_json.php');

$jugadores = [
    [
        'nombre' => 'Lionel',
        'apellido' => 'Messi',
    ],
    [
        'nombre' => 'Emiliano',
        'apellido' => 'Martinez',
    ],
    [
        'nombre' => 'Angel',
        'apellido' => 'Di Maria',
    ],
];

saveJson('data/jugadores.json',$jugadores);
echo 'Se guardo la lista';

$jugador = [
    'nombre' => 'Gonzalo',
    'apellido' => 'Montiel'
];

addItemJson('data/jugadores.json',$jugador);
echo 'Se agrego un nuevo jugador';


?>