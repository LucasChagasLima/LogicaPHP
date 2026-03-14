<?php

$distancia = readline("Informe a distancia: ");
$combustivel = readline("Informe o combustivel gasto: ");

$combustivel = (float) $combustivel;

$consumo = $distancia / $combustivel;

$consumoFormatado = number_format($consumo, 3, '.');

echo "O consumo medio é de: $consumoFormatado \n"


?>