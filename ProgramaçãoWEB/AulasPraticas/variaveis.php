<?php

$acesa = FALSE;
    if($acesa){
        print("Primeiro IF, acesa");
    }

$acessa = TRUE;
    if($acesa){
        print("Segundo IF, acesa");
    }

    //Tipode de variaveis inteira
    $variavelInteira = 12324;
        echo $variavelInteira;

    //Tipo de variaveis Flutuantes
    $notaAvUm = 4.5;
    $notaAvDois = 9.5;
        echo $notaAvUm + $notaAvDois;

    //Array

    $ListaCPF = array("Ramon" => "123456", "Aluno" => "987456");
    echo $ListaCPF["Ramon"];
    echo "<br/>";

    echo $ListaCPF["Aluno"];

?>