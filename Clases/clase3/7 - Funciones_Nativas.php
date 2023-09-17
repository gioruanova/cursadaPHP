<?php
//Redondeo decimal (normal)---------------------
$decimal = 1.50;
$decimalRedondeadoNormal = round($decimal);
echo $decimalRedondeadoNormal;


echo "<br>";
//Redondeo decimal (para abajo)---------------------
$decimalRedondeadoAbajo = floor($decimal);
echo $decimalRedondeadoAbajo;


echo "<br>";
//Redondeo decimal (para arriba)---------------------
$decimalRedondeadoArriba = ceil($decimal);
echo $decimalRedondeadoArriba;


echo "<br>";
//Numero Aleatorio---------------------
$numeroAleatorio = rand(1, 10);
echo $numeroAleatorio;


echo "<br>";
//String a mi---------------------
$palabra = "HoLa";
$palabraAMiniscula = strtolower($palabra);
echo $palabraAMiniscula;


echo "<br>";
//cantidad de caracteres string---------------------
$palabraCount = "Revisando cantidad caracteres";
$contarCaract = strlen($palabraCount);
echo "Tiene " . $contarCaract . " caracteres";


echo "<br>";
//Split en caracateres---------------------
$palabraSubs = "Revisando cantidad caracteres";
$contarCaract = substr($palabraSubs, 0, 6);
echo "Corte desde 0 a 6 caracteres >>>> " . $contarCaract;


echo "<br>";
//Elimnar espacios al comienzo y final string---------------------
$palabraEspacios = "                Espacios antes y despues            ";
$trimPalabra = trim($palabraEspacios);
echo $trimPalabra;


echo "<br>";
//Filtrar caednas especificando criterio---------------------
$email = "jruanova@gmail.com";
$email = filter_var($email, FILTER_VALIDATE_EMAIL); // Verifica si el string es un correo "formato valido". Sino, retorna false

// Mas ejemplos>>>>>>
$email = filter_var($email, FILTER_VALIDATE_INT);
$email = filter_var($email, FILTER_VALIDATE_FLOAT);
$email = filter_var($email, FILTER_VALIDATE_URL);

echo "<br>";
// Reemplazar una string por otro
$texto = "Mi color preferido es el rojo";
echo $texto;
echo "<br>";
$textoModificado = str_replace("rojo", "azul", $texto);
echo $textoModificado;
// seleccionar varias palabras usando un array y reemplazarlas
$textoModificado = str_replace(["rojo", "azul"], "verde", $texto);
echo "<br>";
echo $textoModificado;


echo "<br>";
// Validar si es numero
$numero = "10";
$validarNumero = is_numeric($numero);
if ($validarNumero) {
    echo "es un numero";
} else {
    echo "no es numero";
}

echo "<br>";
// Debuggin > var dump()
$cadena = "Manzana";
$numero = 5;
$valorLogico = true;
$arreglo = ["Azul", "verde", "rojo", 452];
echo "<pre>";
var_dump($cadena) . "<br>";
echo "<pre>";
var_dump($numero) . "<br>";
echo "<pre>";
var_dump($valorLogico) . "<br>";
echo "<pre>";
var_dump($arreglo) . "<br>";


echo "<br>";
// Arreglos
$nombres = ["Juana", "Jorge", "Luis", "Patricia", "Alejandro"];

// Ordenamiento A a Z o menor a mayor
sort($nombres);

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}
echo "<br>";



$numerosDesordenados = [400, 20, 1, 150, 900, 23];
sort($numerosDesordenados);

foreach ($numerosDesordenados as $numero) {
    echo $numero . "<br>";
}

echo "<br>";
// Ordenamiento Z a A
rsort($nombres);
foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

// ordenamiento aleatorio
echo "<br>";
$nombres = ["Juana", "Jorge", "Luis", "Patricia", "Alejandro"];

// Ordenamiento A a Z o menor a mayor
shuffle($nombres);

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}


echo "<br>";
// Agregar posicion al array
array_push($nombres, "Lala");

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}

echo "<br>";
// Igual que push pero al principio
array_unshift($nombres, "Cristian");

foreach ($nombres as $nombre) {
    echo $nombre . "<br>";
}


echo "<br>";
// Buscar posicion en array
$nombres = ["Juana", "Jorge", "Luis", "Patricia", "Alejandro"];
$nombreABuscar = "Juana";
if (in_array($nombreABuscar, $nombres)) {
    echo "el nombre esta en la lista";
} else {
    echo "El nombre no esta en la lista";

}

echo "<br>";
echo "<br>";

// Contar posiciones en array
$nombresTotal = count($nombres);
echo "El array nombres tiene " . $nombresTotal . " posiciones.";

echo "<br>";
// Convierte un string a array , de acuerdo al simbolo
$cadenaPaises = "Argentina-Bolivia-Brasil-Chile";
$paisesArreglo = explode("-", $cadenaPaises);
var_dump($paisesArreglo);

echo "<br>";
// Convierte un array a string, de acuerdo al simbolo
$cadenaATexto = implode(" | ", $paisesArreglo);
var_dump($cadenaATexto);














?>