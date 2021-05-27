<?php
/* 2. Escribe un script PHP que genere un número aleatorio entre 1 y 10, simulando una numero numérica y muestre un mensaje */
$numero = rand (0,10);
echo "$numero";
echo "<br>";
if ($numero >= 0 and $numero < 5) {
    echo "Insuficiente";
} elseif ($numero >= 5 and $numero < 6) {
    echo "Suficiente";
} elseif ($numero >= 6 and $numero < 7) {
    echo "Bien";
} elseif ($numero >= 7 and $numero < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
?>