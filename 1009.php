<?php

$nome = readline();
$salarioFixo = readline();
$totalVendas = readline();
$comissao = $totalVendas * 0.15;
$totalReceber = $salarioFixo + $comissao;
printf("TOTAL = R$ %.2f\n", $totalReceber);



?>