<?php


function calcularLitros($tempo, $velocidadeMedia) {
    $autonomia = 12;
    $distancia = $tempo * $velocidadeMedia;
    $litrosNecessarios = $distancia / $autonomia;
    return number_format($litrosNecessarios, 3, '.', '');
}
$tempo = intval(readline());
$velocidadeMedia = intval(readline());
$resultado = calcularLitros($tempo, $velocidadeMedia);
echo $resultado . "\n";


?>
