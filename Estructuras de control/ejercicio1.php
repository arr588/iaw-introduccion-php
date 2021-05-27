<?php
/* 1. Escribe un script que simule el comportamiento de lanzar una moneda al aire y muestre una imagen con la cara o la cruz de la moneda. */
$moneda = rand (0,1);
if ($moneda == 1) {
    echo "<img src='monedas/cara.jpg'>";
} else {
    echo "<img src='monedas/cruz.jpg'>";
}