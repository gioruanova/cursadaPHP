<?php

// Crear dos variables $num1 y $num2, y guardar dos números cualquiera en éstas.
// Debajo colocar un condicional if que verifique si $num2 es 0.
// Si $num2 es cero mostrar por pantalla el siguiente texto: “No se puede dividir por cero”
// Caso contrario mostrar por pantalla la división entre ambas variables ($num1 / $num2).



$num1 = 20;
$num2 = 0;

if ($num2 == 0) {
    echo "No se puede dividir por cero";
} else {
    $division = $num1 / $num2;
    echo "El resultado de la division es . {$division}";
}
?>