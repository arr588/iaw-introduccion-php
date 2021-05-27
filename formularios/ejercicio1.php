<?php
$nombre = $_GET["nombre"];

if (!empty($nombre)) {
    echo "$nombre";
}

else {
    echo "No se ha introducido ningun nombre";
}
?>