<?php

$distancia = readline("Digite a distância total percorrida (em km): ");
$combustivel = readline("Digite o total de combustível gasto (em litros): ");
$consumoMedio = $distancia / $combustivel;
printf("%.3f km/l\n", $consumoMedio);




?>
