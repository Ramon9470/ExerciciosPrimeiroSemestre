<?php

$hostname = "127.0.0.1";
$usuario = "root";
$senha = "";
$nome_banco = "frmlogin";

try{
  $conexao = new PDO("mysql:host=$hostname;dbname=$nome_banco", $usuario, $senha);
  $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erro ao conectar com o banco de dados." . $e->getMessage();
    $conexao = null;
}

?>
