<?php

list($codigoPeca1, $numeroPecas1, $valorUnitarioPeca1) = explode(" ", readline());
list($codigoPeca2, $numeroPecas2, $valorUnitarioPeca2) = explode(" ", readline());
$totalPeca1 = $numeroPecas1 * $valorUnitarioPeca1;
$totalPeca2 = $numeroPecas2 * $valorUnitarioPeca2;
$totalPago = $totalPeca1 + $totalPeca2;
echo "VALOR A PAGAR: R$ " . number_format($totalPago, 2, '.', '') . PHP_EOL;



?>
