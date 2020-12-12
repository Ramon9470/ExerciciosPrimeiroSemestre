<?php

$hostname = "localhost";
$username = "root";
$password = "";
$nome_banco = "projeto";

// Estabelecendo a conexao 
$conexao = mysqli_connect($hostname, $username, $password, $nome_banco);

if (!$conexao){
	echo "Falha na conexwão com Bando de Dados.";
}

//conexão do login com o banco