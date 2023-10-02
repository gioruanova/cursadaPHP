<?php

$data = [
    'nombre' => 'Margaret',
    'apellido' => 'Simpson',
    'edad' => 1
];


$json = json_encode($data);
echo $json;

$jsonDecode = json_decode($json, true); // --> array asociativo
// $jsonDecode = json_decode($json); // --> objeto
echo "<pre>";
var_dump($jsonDecode);


?>