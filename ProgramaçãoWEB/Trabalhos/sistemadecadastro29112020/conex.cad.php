<?php

$local = "localhost";
$usuario = "root";
$pass = "";
$banco = "projeto";

$conectar = mysqli_connect($local, $usuario, $pass, $banco);

if (!$conectar){
    echo "Falha na conexão com Bando de Dados.";
}

?>
