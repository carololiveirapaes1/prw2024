<?php

$valor = intval(fgets(STDIN));
$cedulas = array(100, 50, 20, 10, 5, 2, 1);
echo $valor . PHP_EOL;
foreach ($cedulas as $cedula) {
    $qtd_notas = intval($valor / $cedula); 
    $valor %= $cedula; 
    echo $qtd_notas . " nota(s) de R$ " . $cedula . ",00" . PHP_EOL;
}




?>
