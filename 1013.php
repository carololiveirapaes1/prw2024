<?php

list($a, $b, $c) = array_map('intval', explode(" ", readline()));
$maiorAB = ($a + $b + abs($a - $b)) / 2;
$maiorABC = ($maiorAB + $c + abs($maiorAB - $c)) / 2;
echo $maiorABC . " eh o maior" . PHP_EOL;



?>