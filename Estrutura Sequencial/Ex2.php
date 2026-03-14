<?php

// Problema do Retangulo

$base = readline("Digite a base do retangulo: ");
$altura = readline("Digite a altura do retanto: ");

$base = (float) $base;
$altura = (float) $altura;

$area = $base * $altura;
$perimetro = 2 * ($base + $altura);
$diagonal = sqrt(pow($base, 2) + pow($altura, 2));

$area_formatada = number_format($area, 4, '.', '');
$perimetro_formatada = number_format($perimetro, 4, '.', '');
$diagonal_formatada = number_format($diagonal, 4, '.', '');

echo "Area = $area_formatada \n";
echo "Perimetro = $perimetro_formatada \n";
echo "Diagonal = $diagonal_formatada \n";

?>