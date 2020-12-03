<!--
    12.	Ler vários números e informar quantos números entre 100 e 200 foram digitados. 
    Se o valor 0 for lido encerrar a execução   
-->
<?php
responce_once("12.php");
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 12</title>
</head>
<body>
    <form action="12.php">
        <p>Informe um número:</p>
        <input type="number" name="numero">
        <input type="hidden"  name="val_total"> 
        <input type="submit" value="enviar">
    </form>
</body>
</html>