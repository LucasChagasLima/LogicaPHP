<?php

$preco = readline("Preço unitario do produto: ");
$qtd = readline("Quantidade comprada: ");
$dinheiro = readline("Dinheiro Recebido: ");


$preco = (float) $preco;
$dinheiro = (float) $dinheiro;

$troco = $dinheiro - ($preco * $qtd);

$trocoFormatado = number_format($troco, 2, '.', '');

echo "Seu troco é de = $trocoFormatado \n";




?>