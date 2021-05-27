<?php
/* 5. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando 
la estructura de control switch. */

$dado = rand(1,6);
echo "Numero $dado";
echo "<br>";
switch ($dado){
    case 1:
        echo "<img src='dado/1.png'>";
    break;
    case 2:
        echo "<img src='dado/2.png'>";
    break;
    case 3:
        echo "<img src='dado/3.png'>";
    break;
    case 4:
        echo "<img src='dado/4.png'>";
    break;
    case 5:
        echo "<img src='dado/5.png'>";
    break;
    case 6:
        echo "<img src='dado/6.png'>";
    break;
}
?>