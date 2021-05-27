<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 4: Tabla de multiplicar aleatoria del 1 al 10.</title>
    </head>
    <body>
        <h1>Tabla</h1>
        <table border="1">
        <?php
            $numero = rand(1, 10);
            for ($i=0; $i <= 10 ; $i++) { 
                $resultado = $numero*$i;
                echo "<tr>";
                echo "<td>$numero*$i = $resultado</td>";
                echo "</tr>";
            }
        ?>
    </body>
</html>