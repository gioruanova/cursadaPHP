<?php

$frutas = ['naranja','manzana','pera','banana'];


echo '<ul>';

for ($i = 0;$i < count($frutas) ;$i++){
echo "<li> {$frutas[$i]} </li>";
}

echo '</ul>'


?>