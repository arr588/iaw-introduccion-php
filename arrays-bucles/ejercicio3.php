<?php
/* 3. Escribe un script PHP que realice las siguientes acciones:
-Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30.
-Una vez que ha inicializado el array, imprima todos los valores que almacena.
-Buscar el valor máximo de los valores del array.
-Muestre el valor máximo que ha encontrado. */

$array = array();

for ($i=0; $i < 10; $i++) { 
    $array[$i] = rand(1, 30);
}

for ($i=0; $i < 10; $i++) { 
    echo $array[$i];
    echo "<br>";
}

$mayor = max($array);

echo "El numero mas grande es: $mayor";
?>