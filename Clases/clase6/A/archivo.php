<?php

// w = write > escribir;
// fwrite($archivo,'Hola, Editando el archivo'); > lo que se escribe
// fclose($archivo); > para cerrar el archivo

$archivo = fopen('archivo.txt', 'w');
fwrite($archivo, 'Hola editando archivo');
fclose($archivo);


echo 'se creo un archivo llamado archivo.txt';

?>