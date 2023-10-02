<?php

function getJson($url)
{
    if (!file_exists($url))
        saveJson($url, []);
    $archivo = file_get_contents($url);
    $lista = json_decode($archivo, true);
    return $lista;
}

function saveJson($url, $lista)
{
    $json = json_encode($lista);
    $stream = fopen($url, 'w');
    fwrite($stream, $json);
    fclose($stream);
}

function addItemJson($url, $item)
{
    $lista = getJson(($url));
    $lista[] = $item;
    saveJson($url, $lista);
}

?>