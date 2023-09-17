<?php


$personajes = array(
array('nombre'=>"Harry",'apellido'=>"Potter",''),
array('nombre'=>"Lala",'apellido'=>"Lele",''),
array('nombre'=>"Keanu",'apellido'=>"Reeves",''),
);

echo "<ul>";

foreach ($personajes as $personaje) {
    echo "<li> {$personaje['nombre']} </li>";
}

echo "</ul>";
?>