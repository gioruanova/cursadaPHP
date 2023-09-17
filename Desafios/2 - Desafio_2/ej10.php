
<?php

// Crear una función llamada tresAnimales() que no reciba ningún parámetro y devuelva un array con tres animales diferentes que no se repitan.
// Dentro de la función debemos incluir un array con el siguiente formato:


function tresAnimales(){
    $horoscopo_chino = [
        'rata', 'buey', 'tigre', 'conejo', 'dragón', 'serpiente', 'caballo', 'oveja', 'mono', 'gallo', 'perro', 'cerdo'
    ];
    $newHoroscopoChino = [];

    while(count($newHoroscopoChino) < 3) {
        $animalRandom = $horoscopo_chino[array_rand($horoscopo_chino)]; 
        
        if (!in_array($animalRandom, $newHoroscopoChino)) {
            $newHoroscopoChino[] = $animalRandom;
        }
    }

    return $newHoroscopoChino;
}

$newHoroscopoChino = tresAnimales();

foreach ($newHoroscopoChino as $animal) {
    echo $animal . "<br>";
}
?>