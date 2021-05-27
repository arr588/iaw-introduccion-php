<?php
/* 4. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la 
estructura de control if - else. */
$dado = rand(1,6);
echo "Numero $dado";
echo "<br>";
if ($dado == 1) {
    echo "<img src='dado/1.png'>";
} elseif ($dado == 2) {
    echo "<img src='dado/2.png'>";
} elseif ($dado == 3) {
    echo "<img src='dado/3.png'>";
} elseif ($dado == 4) {
    echo "<img src='dado/4.png'>";
} elseif ($dado == 5) {
    echo "<img src='dado/5.png'>";
} else {
    echo "<img src='dado/6.png'>";
}
?>