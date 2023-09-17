<?php
// ---------------------------
//Parametros pasados por referencia (evitarlo)


$numero = 10;
// "&" cambia el valor de la variable
function sumarNuevo(&$numero)
{
    $numero += 12;
    return $numero;
}

echo sumarNuevo($numero) . '<br/>'; // Devuelve 20
echo $numero; // Devuelve 20


echo '<br>';

?>