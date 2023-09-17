<?php 

// Siguiendo con el ejemplo del ejercicio anterior, hacer lo mismo, pero cambiando el array multidimensional de arrays asociativos. Por ejemplo:

// Al igual que el ejercicio anterior, recorrer con un ciclo el array $costos, pero sumar a la variable $total la key ‘precio’


$saldo = 10000;
$costos = [
    [
        'detalle' => 'Teclado para computadora',
        'precio' => 2000
    ],
    [
        'detalle' => 'Mouse',
        'precio' => 1000
    ],
    [
        'detalle' => 'Auriculares',
        'precio' => 5000
    ]
];
$total = 0;


foreach ($costos as $costo) {
    $total = $total + $costo['precio'];
}



if ($saldo > $total){
    echo $saldo - $total;
}else{
    echo "Saldo insuficiente";
}

?>