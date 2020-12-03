/*

6.	Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, 
informar que não existe mês com este número.

*/

<?php

$mes = $_GET['mes'];

if ($mes < 1 || $mes > 12){
    
    echo ("Mês inválido");     

    }else {
                    
        $meses = array ( 1 => 'Janeiro', 2 => 'Feveiro', 3 => 'Março', 4 => 'Abril', 5 => 'Maio', 6 => 'Junho', 7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro', 10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro');
        
        return $mes;
    }
?>