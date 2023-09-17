<?php


// Crear una función llamada validarTexto($texto, $min_length, $max_length), que reciba tres parámetros y valide que:
// $texto: El texto no sea una cadena vacía, por ejemplo: ‘’ (comillas vacías) o ‘   ’ (comillas vacías con sólo espacios) Abstenerse de usar expresiones regulares.
// $min_length: La cantidad de caracteres de $texto no puede ser menor a $min_length.
// $max_length: La cantidad de caracteres de $texto no puede ser mayor a $max_length.
// En caso que la función valide correctamente debe retornar true, sino false.

function validarTexto($texto, $min, $max)
{
    $textoSinEspacios = trim($texto);
    $textoLongitud = strlen($textoSinEspacios);

    $validacion = true;
    if ($textoLongitud === 0 || $textoLongitud < $min || $textoLongitud > $max) {
        $validacion = false;

    } else {
        $validacion = true;
    }
    return $validacion;

}
if (validarTexto('eureka', 3, 20)) {
    echo "El texto es válido.";
} else {
    echo "El texto no es válido.";
}

echo '<br>';

if (validarTexto('abcdefghijklmnopqrstuvwxyz', 3, 20)) {
    echo "El texto es válido.";
} else {
    echo "El texto no es válido.";
}


?>