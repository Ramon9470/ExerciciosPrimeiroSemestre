<?php

$servername = "localhost";
$username = "root";
$password = "";
$nome_banco = "formulario";

$connect = mysqli_connect($servername, $username, $password, $nome_banco);

if (mysqli_connect_error()):
    echo 'Falha na conexão...'.mysql_connect_error();
endif;

?>