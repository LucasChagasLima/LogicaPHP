<?php

$pi = 3.14159;

$raio = readline("Digite o raio do circulo: ");
$raio = (float) $raio;

$area = $pi * ($raio * $raio);

$areaFormatada = number_format($area, 3, '.', ',');

echo "A area é de = $areaFormatada \n"




?>