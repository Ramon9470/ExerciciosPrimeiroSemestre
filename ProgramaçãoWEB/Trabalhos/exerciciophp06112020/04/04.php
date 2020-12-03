<?php

$cliente = $_GET['cliente'];
$dias = $_GET['dias'];

$valorTotal = 0;
$valorDiaria = 40;
$valorTaxa15 = 15;
$valorTaxa08 = 8;

if ($dias < 10){
    $valorTotal = $valorDiaria + ($valorTaxa15 * $dias);

} else if ($dias > 10){
    $valorTotal = $valorDiaria + ($valorTaxa08 * $dias);

}

echo "Nome funcionário: " .$cliente;
echo "Valor total: " .$valorTotal;

?>