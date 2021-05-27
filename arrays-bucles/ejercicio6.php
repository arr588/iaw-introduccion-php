<?php
/* 6. Resuelva el ejercicio utilizando bucles while. */

$array = array();

$i=0;
while ($i < 10) { 
    $array[$i] = rand(1, 30);
    $i++;
}

$i=0;
while ($i < 10) { 
    $suma = $suma + $array[$i];
    echo $array[$i];
    $i++;
    echo "<br>";
}

$suma = 0;

foreach ($array as $clave) {
    $suma += $clave;
}

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