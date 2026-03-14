<?php

$nome = readline("Informe seu nome: ");
$valorHora = readline("Informe o Valor da Hora: ");
$horasTrabalhadas = readline("Informe as horas trabalhadas: ");

$valorHora = (float)$valorHora;

$salario = $valorHora * $horasTrabalhadas;
$salarioFormatado = number_format($salario, 2, '.', ',');

echo "O pagamento para $nome deve ser de: $salarioFormatado \n";




?>