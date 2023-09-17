<?php



$notas = [10, 8];

// Funcion 1
function sumarNotas(array $notas)
{
    $suma = 0;
    foreach ($notas as $n) {
        $suma += $n;

    }
    return $suma;
}

// Funcion 2
function sacarPromedio(array $notas)
{
    $suma = sumarNotas($notas);
    $division = $suma / count($notas);
    return $division;
}


$promedio = sacarPromedio($notas);
echo $promedio;



?>