<?php
$nombre = $_POST["nombre"];

if (!empty($nombre)) {
    echo "$nombre";
}

else {
    echo "No se ha introducido ningun nombre";
}
?>