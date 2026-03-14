<?php

echo "Dados da primeira pessoa: ";

$nome = readline("Nome: ");
$idade = readline("Idade: ");

$idade = (float) $idade;

echo "Dados da segunda pessoa: ";

$nome2 = readline("Nome: ");
$idade2 = readline("Idade: ");

$idade2 = (float) $idade2;

$media = ($idade + $idade2) / 2;

$mediaFormatada = number_format($media, 1, '.', '');



echo "A idade media de $nome e $nome2 é de $mediaFormatada anos \n";





?>