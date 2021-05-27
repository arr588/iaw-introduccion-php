<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio while: 1-10 con una fila y 10 columnas.</title>
    </head>
    <body>
        <h1>Tabla</h1>
        <table border="1">
        <?php
            $i = 1;
            while ($i <= 10){
                echo "<tr>
                <td>$i</td>
                </tr>";
            $i++;
            }
        ?>
    </body>
</html>