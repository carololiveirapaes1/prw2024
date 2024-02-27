<?php

list($A, $B, $C) = array_map('floatval', explode(" ", readline()));
$areaTriangulo = ($A * $C) / 2;
echo "TRIANGULO: " . number_format($areaTriangulo, 3, '.', '') . PHP_EOL;
$areaCirculo = 3.14159 * $C * $C;
echo "CIRCULO: " . number_format($areaCirculo, 3, '.', '') . PHP_EOL;
$areaTrapezio = (($A + $B) * $C) / 2;
echo "TRAPEZIO: " . number_format($areaTrapezio, 3, '.', '') . PHP_EOL;
$areaQuadrado = $B * $B;
echo "QUADRADO: " . number_format($areaQuadrado, 3, '.', '') . PHP_EOL;
$areaRetangulo = $A * $B;
echo "RETANGULO: " . number_format($areaRetangulo, 3, '.', '') . PHP_EOL;




?>