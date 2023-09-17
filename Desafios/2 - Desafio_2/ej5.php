<?php 

// Crear dos variables $num1 y $num2 y verificar con un condicional if si el primero es menor al segundo.
// Si la condición se cumple imprimir por pantalla todos los números que hay desde el primero (incluido) hasta el segundo (incluido) con un ciclo de repetición for.


$num1 = 5;
$num2 = 10;

if ($num1 < $num2){
    for ($i = $num1; $i <=$num2;$i++){
        echo $i . "<br>";
    }
}

?>