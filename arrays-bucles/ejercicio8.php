<?php
/* 8. Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:
-Mostrar el listado ordenado de mayor a menor.
-Mostrar el listado ordenado de menor a mayor.
El array de temperaturas lo vamos a generar con números aleatorios.
El número de elementos del array será especificado mediante un formulario y los valores aletorios generados estarán entre 1 y 30. */

$array = array();
$i = 0;
do  { 
    $array[$i] = rand(1, 30);
    $i++;
} while ($i < 10);

sort ($array);
$i = 0;
do  {
    $suma = $suma + $array[$i];
    echo $array[$i];
    $i++;
    echo "<br>";
} while ($i < 10);

rsort($array);
echo "<br>";
$i = 0;
do  {
    $suma = $suma + $array[$i];
    echo $array[$i];
    $i++;
    echo "<br>";
} while ($i < 10);
?>