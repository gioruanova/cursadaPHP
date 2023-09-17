<?php

// Crear una función llamada validarNumero($numero, $min, $max),que reciba tres parámetros y valide que:
// $numero: Sea un valor numérico. Ayuda: is_numeric($numero) es una función que devuelve true si el valor pasado como parámetro es número, y false si no es así.
// $min: El valor de $numero no puede ser menor a $min.
// $max: El valor de $numero no puede ser mayor a $max.
// En caso que la función valide correctamente debe retornar true, sino false.

function validarNumero($numero, $min, $max)
{
    $valorNumero = is_numeric($numero);
    $validacion = true;

    if (!$valorNumero || $numero < $min || $numero > $max) {
        $validacion = false;
    } else {
        $validacion = true;
    }
    return $validacion;
}

if (validarNumero(12, 13, 13)) {
    echo "El numero esta ok";
} else {
    echo "el numero no esta ok";
}

?>