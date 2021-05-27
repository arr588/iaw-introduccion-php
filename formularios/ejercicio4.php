<?php

$numero_de_monedas = $_GET["numero_de_monedas"];
$tipo_moneda = $_GET["tipo_moneda"];

if (empty($numero_de_monedas) || empty($tipo_moneda)) {
    header('Location: 4monedas.php');
    exit;
}

echo "<h2>Número de monedas: $numero_de_monedas</h2>";
echo "<h2>Tipo de moneda: $tipo_moneda</h2>";

$lista = array();
for($i = 0; $i < $numero_de_monedas; $i++) {
    $lista[$i] = rand(0, 1);
}

switch ($tipo_moneda) {
    case "Yenes":
        for ($i = 0; $i < $numero_de_monedas; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='img/1.jpg'>";
            } else {
                echo "<img src='img/2.jpg'>";
            }
        }
        break;
    case "Euros":
        for ($i = 0; $i < $numero_de_monedas; $i++) {
            if ($lista[$i] == 0) {
                echo "<img src='img/cara.jpg'>";
            } else {
                echo "<img src='img/cruz.jpg'>";
            }
        }
        break;
}
?>