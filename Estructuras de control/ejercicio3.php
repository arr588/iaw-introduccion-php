<?php
/* 3. Escribe un script PHP que genere un número aleatorio entre 1 y 7, y muestre un mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 
2 martes, etc.*/
$numero = rand (1,7);
echo "El número $numero es el dia\n";
switch ($numero){
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miércoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sábado";
        break;
    case 7:
        echo "Domingo";
        break;
}
?>