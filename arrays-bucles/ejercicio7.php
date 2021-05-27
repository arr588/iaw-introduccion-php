<?php
/* 5. Resuelva el ejercicio utilizando bucles while. */

$array = array();

$i = 0;
do { 
    $array[$i] = rand(1, 30);
    $i++;
} while ($i < 10);

$suma = 0;
$i = 0;
do {
    $suma = $suma + $array[$i];
    echo $array[$i];
    $i++;
    echo "<br>";
} while ($i < 10);

$mayor = max($array);
$menor = min($array);
$numeros = count($array);
$media = $suma / $numeros;

echo "La temperatura media es: $media";
echo "<br>";
echo "La temperatura minima es: $mayor";
echo "<br>";
echo "La temperatura maxima es: $menor";
?>