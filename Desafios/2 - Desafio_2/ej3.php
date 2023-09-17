<?php	


// Crear dos variables $num1 y $num2, y debajo con un condicional if, verificar si ambos números son par.
// Si la condición se cumple imprimir por pantalla: “Ambos números son par”. De lo contrario: mostrar el texto “Uno o ambos números no son par”


$num1 = 5;
$num2 = 3;

if($num1 % 2 == 1 || $num2 % 2 == 1){
    echo "Uno o ambos nomeros no son par";
} else {
    echo "Ambos numeros son par";
}

?>