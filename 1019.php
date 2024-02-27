<?php

$tempoEmSegundos = intval(readline());
$horas = floor($tempoEmSegundos / 3600);
$tempoEmSegundos %= 3600;
$minutos = floor($tempoEmSegundos / 60);
$segundos = $tempoEmSegundos % 60;
echo "{$horas}:{$minutos}:{$segundos}" . PHP_EOL;



?>
