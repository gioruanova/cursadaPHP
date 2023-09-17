<?php

// Ejemplo de funcion

// EJEMPLO 1
function saludar($nombre)
{
    $texto = "Hola, {$nombre}";
    return $texto;
    
}

echo saludar("Cosme Fulanito");
echo "<br>";

// ----------------------------------------------------
// EJEMPLO 2
function saludarDos($nombre)
{
    return "Hola {$nombre}";
    
}

echo saludarDos("Jorge");
echo "<br>";

// ----------------------------------------------------
// EJEMPLO 3
function saludarTres($nombre)
{
    return "Hola {$nombre}";
    
}

$resultado = saludarTres("Pepito");

echo $resultado;
echo "<br>";


// ----------------------------------------------------
// EJEMPLO 4
function saludarCuatro ($nombre, $apellido){
    $texto = "Hola {$nombre} {$apellido}";
    return $texto;
}

echo saludarCuatro("pepe", "Gomez");


?>