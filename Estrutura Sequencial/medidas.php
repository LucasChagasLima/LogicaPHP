<?php

    $a = (float)readline("Digite a medida de A: ");
    $b = (float)readline("Digite a medida de A: ");
    $c = (float)readline("Digite a medida de A: ");

    $quadrado = $a * $a;
    $triangulo = $a * $b /2;
    $trapezio = ($a + $b) * $c / 2;

    $quadradoFormatado = number_format($quadrado, 4, '.');
    $trianguloFormatado = number_format($triangulo, 4, '.');
    $trapezioFormatado = number_format($trapezio, 4, '.');

    echo " A AREA DO QUADRADO É: $quadradoFormatado \n";
    echo " A AREA DO TRIANGULO É: $trianguloFormatado \n";
    echo " A AREA DO TRAPEZIO É: $trapezioFormatado \n";


?>