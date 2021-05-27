<?php
/* 2. Revise la documentación oficial de PHP para ver qué información podemos obtener de la variable superglobal $_SERVER.*/

echo "Dirección IP del servidor: </b>" . $_SERVER['SERVER_ADDR'];
echo "<br>";

echo "Nombre del servidor: </b>" . $_SERVER['SERVER_NAME'];
echo "<br>";

echo "Software del servidor: </b>" . $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

echo "User Agent: </b>" . $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo "IP del cliente: </b>" . $_SERVER['REMOTE_ADDR'];
?>