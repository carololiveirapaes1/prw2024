<?php


$distancia = readline("Digite a distância em km: ");
$diferencaVelocidade = 90 - 60;
$tempo = ($distancia / $diferencaVelocidade) * 60;
printf("%d minutos\n", $tempo);



?>
