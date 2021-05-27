<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 2: Tabla de una columna y 10 filas.</title>
    </head>
    <body>
        <h1>Tabla</h1>
        <table border="1">
        <?php
            for ($i = 1; $i <= 10; $i++){
                echo "<tr>";
                echo "<td>$i</td>";
                echo "</tr>";
            }
        ?>
    </body>
</html>