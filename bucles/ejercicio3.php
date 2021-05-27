<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 3: Numeros pares entre 1 y 100.</title>
    </head>
    <body>
        <h1>Tabla</h1>
        <table border="1">
        <?php
            for ($i=2; $i <= 100 ; $i=$i+2) { 
                echo "<td>$i</td>";
            }
        ?>
    </body>
</html>