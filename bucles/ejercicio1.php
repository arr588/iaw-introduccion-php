<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 1: Tabla de una fila y 10 columnas.</title>
    </head>
    <body>
        <h1>Tabla</h1>
        <table border="1">
        <?php
            for ($i = 1; $i <= 10; $i++){
            echo "<td>$i</td>";
            }
        ?>
    </body>
</html>