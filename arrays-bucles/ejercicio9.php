<?php
/* 9. Escribe un script PHP que permita ordenar el siguiente array asociativo:
-De forma ascendente ordenado por valor.
-De forma ascendente ordenado por clave.
-De forma descendente ordenado por valor.
-De forma descendetne ordenado por clave. */

$array = array("Antonio"=>"31", "María"=>"28", "Juan"=>"29", "Pepe"=>"27");

echo "<b>Ordenar de menor a mayor por valor</b>";
echo "<br>";
asort($array);
foreach ($array as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<b>Ordenar de mayor a menor por valor</b>";
echo "<br>";
arsort($array);
foreach ($array as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<b>Ordenar de menor a mayor por clave</b>";
echo "<br>";
ksort($array);
foreach ($array as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}

echo "<b>Ordenar de mayor a menor por clave</b>";
echo "<br>";
krsort($array);
foreach ($array as $clave => $valor) {
    echo "Clave: $clave - Valor: $valor";
    echo "<br>";
}
?>