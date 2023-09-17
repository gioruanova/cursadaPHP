<?php 

// Crear una función llamada tresNumeros() que no reciba ningún parámetro y devuelva un array con tres números aleatorios del 0 al 9 que no se repitan.

function tresNumeros(){
    $numerosAleatorios= [];

    while (count($numerosAleatorios)<3){
        $numerosAleatorio = rand(0,100);

        if (!in_array($numerosAleatorio,$numerosAleatorios)){
            $numerosAleatorios[]=$numerosAleatorio;
        }
    }

    return $numerosAleatorios;
}

$numerosAMostrar= tresNumeros();

foreach ($numerosAMostrar as $numero) {
    echo $numero . "<br>";
    
}



// ?>