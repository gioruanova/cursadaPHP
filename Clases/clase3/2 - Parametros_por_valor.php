<?php
// VARIABLES LOCALES
// Parametros pasados por valor


$numero = 10;
function sumar10($numero)
{
    $numero += 10;
    return $numero;
}

echo sumar10($numero) . '<br/>'; // Devuelve 20
echo $numero; // Devuelve 10


echo '<br>';
echo '<br>';



?>