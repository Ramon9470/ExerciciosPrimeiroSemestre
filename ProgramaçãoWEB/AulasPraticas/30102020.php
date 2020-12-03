<?php

$diasemana = $_GET ['diasemana'];
$diasemana = strtoupper ($diaSemana);

switch ($variable) {
    case 'Segunda':
        echo 'Segunda-Feira';
        break;
    
    case 'Terça':
        echo 'Terça-Feira';
        break;

    case 'Quarta':
        echo 'Quarta-Feira';
        break;

    case 'Quinta':
        echo 'Quinta-Feira';
        break;

    case 'Sexta':
        echo 'Sexta-Feira';
        break;
            
    default:
        echo 'Dia da Semana não encontrado';
        break;
}