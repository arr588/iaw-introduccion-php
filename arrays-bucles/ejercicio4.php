<?php
/* 4. Escribe un script PHP que realice las siguientes acciones:
-Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
-Una vez que ha inicializado el array, imprima todos los valores que almacena.
-Buscar el valor mínimo de los valores del array.
-Muestre el valor mínimo que ha encontrado.
Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
-Calcular la media.
-Calcular el valor máximo.
-Calcular el valor mínimo.
-Mostrar todos los valores calculados. */

$array = array();

for ($i=0; $i < 10; $i++) { 
    $array[$i] = rand(1, 30);
}

for ($i=0; $i < 10; $i++) { 
    echo $array[$i];
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