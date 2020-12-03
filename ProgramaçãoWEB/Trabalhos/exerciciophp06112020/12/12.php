<?php


    $valor = $_GET['valor'];
    $total = 0;

    if($valor > 100 && $valor < 200){
        $total = $total + 1;
        $val = array($total);
        header('location:012.php');
    }
    elseif($valor == 0) {
        echo $val;
    }
    else{
        header('location:012.php');
    }