<?php
/* 1. Tabla de multiplicar. */
function imprimir_tabla_multiplicar($numero){
    echo "<table border=1>";
    # Incremento de 1 a 10 usado en otras prácticas.
    for ($i = 0; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo"<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>";
    }
    echo "</table>";
}

/* 4. Calcular media. */
function calcular_media() {

$array = array();
for ($i = 0; $i < 10; $i++ ){
    $array[$i] = rand(1, 30);
}
$suma = 0;
  
for ($i = 0; $i < 10; $i++ ) {
    $suma = $suma + $array[$i];
}
echo "array";
echo "<br>";
for ($i=0; $i < 10; $i++) { 
    echo $array[$i];
    echo "<br>";
}
echo "<br>";
$media = $suma / 10;

echo "<b>La media es</b>: ".$media;
}

/* 5. Ejercicio calcular máximo */
function calcular_maximo() {

$array = array();
for ($i = 0; $i < 10; $i++){
    $array[$i] = rand(1, 30);
}

echo "array";
echo "<br>";
for ($i = 0; $i < 10; $i++) {
    echo $array[$i];
    echo "<br>";
}
$maximo = max($array);

echo "<b>El valor maximo es es</b>: ".$maximo;
}

/* 6. Calcular minimo */
function calcular_minimo() {

define("10", 10);
$array = array();
for ($i = 0; $i < 10; $i++){
    $array[$i] = rand(1, 30);
}
echo "array";
echo "<br>";

for ($i = 0; $i < 10; $i++) {
    echo $array[$i];
    echo "<br>";
}

$minimo = min($array);

echo "<b>El valor minimo es</b>: ".$minimo;
}


# Funcion "saludo"
function saludo() {
    echo "Hola mundo!";
}

# Entrada: $nombre
# Salida: -
function saludo_usuario ($nombre){
    echo "Hola $nombre!";
}

# Entrada: $nombre
# Salida: Cadena de texto
function saludo_usuario_con_salida($nombre){
    return "Hola $nombre!"; 
}

?>