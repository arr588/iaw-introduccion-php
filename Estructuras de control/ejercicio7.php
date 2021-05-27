<?php
/* 7. Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen con los valores obtenidos en cada uno de los dados. */
$tirada1 = rand(1,6);
$tirada2 = rand(1,6);
echo "<h1>Tiradas $tirada1 y $tirada2</h1>";
echo "<br>";
echo "<img src='dado/$tirada1.png'>";
echo "<img src='dado/$tirada2.png'>";
?>