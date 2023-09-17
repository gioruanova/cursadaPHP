<?php
// ---------------------------
//Parametros por defecto (no obligatorios)

function saludar($nombre = "Visitante"){
    $texto = "Hola {$nombre}";
    return $texto;

}

echo saludar();

?>