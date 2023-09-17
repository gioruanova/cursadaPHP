<?php 

// 1. Crear una variable numérica llamada $saldo que guarde un número cualquiera
// 2. También una variable de tipo array que guarde varios números
// 3. Y finalmente una tercer variable llamada $total y que guarde un valor cero:

// Debajo recorrer el array $costos con algún ciclo de repetición (foreach, for,  while) y sumar a la variable $total los números dentro del ciclo.
// Si al final la variable $total es menor o igual a $saldo, restar a $saldo el valor de $total y mostrar por pantalla el saldo actual.
// De lo contrario imprimir “Saldo insuficiente”.




$saldo = 1000;
$costos = [50,50,100,100,500,400];
$total = 0;

foreach ($costos as $costo) {
$total = $total + $costo;
    
}

if ($saldo > $total){
    echo $saldo - $total;
}else{
    echo "Saldo insuficiente";
}
?>