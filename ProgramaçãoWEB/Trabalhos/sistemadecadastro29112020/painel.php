<?php

    session_start();

    if (isset($_SESSION["usuario"]) && is_array($_SESSION["usuario"])){
        
        require("banco.php");

        $adm = $_SESSION["usuario"][1];
        $nome = $_SESSION["usuario"][0];
    }else{
        echo "<script>window.location = 'index.php'</script>";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle - <?php echo $nome; ?></title>
</head>
<body>
    <?php if($adm): ?>
        <table width="40%">
            <thead>
                <tr>      
                    <td>Codigo</td>
                    <td>Nome</td>
                    <td>Senha</td>
                    <td>Email</td>
                    <td>adm</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = $conexao->prepare("SELECT * FROM login");
                    $query->execute();
                    $use = $query->fetchAll(PDO::FETCH_ASSOC);

                    for($i = 0; $i < sizeof($use); $i++): 
                        $userAtual = $use[$i];
                ?>
                <tr>
                    <td><?php echo $userAtual["codigo"]; ?></td>
                    <td><?php echo $userAtual["nome"]; ?></td>
                    <td><?php echo $userAtual["senha"]; ?></td>
                    <td><?php echo $userAtual["email"]; ?></td>
                    <td><?php echo $userAtual["adm"]; ?></td>
                </tr>
                    <?php endfor; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="index.php">Sair</a>
</body>
</html>