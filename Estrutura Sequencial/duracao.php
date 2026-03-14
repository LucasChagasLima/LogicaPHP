<?php

    $duracaoSegundos = (int) readline("Digite a duração em segudos: ");

    $horas = intdiv($duracaoSegundos, 3600);
    $minutos = intdiv($duracaoSegundos % 3600, 60);
    $segundos = $duracaoSegundos % 60;

    echo "$horas horas, $minutos minutos e $segundos segundos \n";





?>