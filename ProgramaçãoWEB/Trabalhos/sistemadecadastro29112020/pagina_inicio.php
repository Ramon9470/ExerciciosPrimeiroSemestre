
<?php

//chamar a conexão do banco de dados
require_once 'conexao_bd.php';

//iniciar a cessão
session_start();

//verificar cessão
if(!isset($_SESSION['logado com sucesso'])):
	header('Location: login.php');
endif;

$id = $_SESSION['id_user'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1>Bem vindo! <?php echo $dados['nome']; ?></h1>
    <a href="fechar_login.php">Sair da página</a>
</body>
</html>