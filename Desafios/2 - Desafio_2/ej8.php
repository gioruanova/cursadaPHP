<?php 


// Crear una función llamada compararNumeros($num1, $num2) que reciba dos números por parámetro y devuelva:
// Si $num1 es mayor a $num2: "{$num1} es mayor a {$num2}"
// Si $num1 es menor a $num2: "{$num1} es menor a {$num2}"
// Si $num1 es igual a $num2: "{$num1} es igual a {$num2}"

function compararNumeros($num1, $num2){

    if($num1 > $num2){
        $resultado= "{$num1} es mayor a {$num2}";

    }elseif($num1 < $num2){
        $resultado= "{$num1} es menor a {$num2}";

    } elseif ($num1 == $num2){
        $resultado= "{$num1}  es igual a {$num2}";
    }

    return $resultado;
}

$resultado = compararNumeros(10, 20);

echo $resultado;

?>