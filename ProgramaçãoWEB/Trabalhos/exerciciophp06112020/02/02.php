<?php

$salary = $_GET ['$salario'];
$valor = $_GET ['$valorPresta'];
$prestacao = $salary * (30 / 100);

if ($valor <= $prestacao){
    echo 'Empréstimo não concedido';
}else{
    echo 'Empréstimo aceito';
}