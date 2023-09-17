<?php

// Crear una función llamada agregarItem($valor, &$lista), que reciba dos parámetros: un string y un array.
// Si $valor NO existe dentro del array $lista, entonces deberá agregarse en dicha lista. 
// Importante: el parámetro $lista debe escribirse tal cual como se menciona con el signo: “&” delante de $lista (&$lista) para que el array se pase por referencia y así pueda modificar el contenido dentro de la función.



$animales = ['Perro', 'Gato', 'Conejo'];


function mostrarAnimales(array $animales)
{
    foreach ($animales as $a) {

        echo "$a <br>";
    }
}




function agregarItem($animalAgregar, &$lista)
{
    if (!in_array($animalAgregar, $lista)) {
        $lista[] = $animalAgregar;
    }


}

mostrarAnimales($animales);
echo "<br>";
agregarItem("Pato", $animales);
mostrarAnimales($animales);




?>