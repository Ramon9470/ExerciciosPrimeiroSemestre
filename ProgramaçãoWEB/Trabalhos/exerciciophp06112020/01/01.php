<?php

$Nomee = $_GET ['$Nomee'];
$Percente = $_GET ['$Percente'];

$aumentoSalario = Calcular ($Nomee, $Percente);
$novoSalario = $Nomee + $aumentoSalario;

echo ('Antigo Salário: '.$Nomee);
echo ('Percentual: '.$Percente);
echo ('Novo Salário: '.$novoSalario);

function calcAume ($salario, $percentual){
    $aumento = $Nomee * ($Percente / 100);
    return $aumento;
}
