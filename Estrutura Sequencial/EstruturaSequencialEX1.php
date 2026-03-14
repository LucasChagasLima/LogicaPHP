<?php

$largura = readline("Digite a largura do Terreno: ");
$comprimento = readline("Digite a comprimento do Terreno: ");
$metros = readline("Digite a metros do Terreno: ");

$largura = (Float) $largura; 
$comprimento = (Float) $comprimento;
$metros = (Float) $metros;

$area =  $largura * $comprimento;
$preco = $area * $metros;

$area_formatada = number_format($area, 2, '.', '');
$preco_formatado = number_format($preco, 2, '.', '');

echo "Area do terreno = $area_formatada \n";
echo "Preco do terreno = $preco_formatado \n";