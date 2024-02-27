<?php


 $idade_em_dias = intval(fgets(STDIN));
$anos = intval($idade_em_dias / 365);
$idade_em_dias %= 365;
$meses = intval($idade_em_dias / 30);
$dias = $idade_em_dias % 30;
printf("%d ano(s)\n%d mes(es)\n%d dia(s)\n", $anos, $meses, $dias);



?>
