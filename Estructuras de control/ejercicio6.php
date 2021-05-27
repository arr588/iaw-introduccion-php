<?php
/* Escriba un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio sin utilizar las 
estructuras de control if - else y switch. */
$variable = rand(1,6);
echo "Numero $variable";
echo "<br>";
echo "<img src='dado/$variable.png'>";
?>