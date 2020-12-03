<?php
    $massa = $_GET['massa'];
    $metade_life = 0.25;
    $grama = 1;
    $tempo = 0;

    while ($grama > 0.10) {
        $grama = $massa * $metade_life;
        $massa = $grama;
        $tempo ++;

    }

    $temp = $tempo * 30;
    echo 'O tempo necessario para a massa radioativa ficar menor que 0,10g é: ',$temp,'Segundos';
?>