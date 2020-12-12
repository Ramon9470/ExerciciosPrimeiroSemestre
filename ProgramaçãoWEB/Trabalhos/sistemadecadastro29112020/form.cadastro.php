<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <nav>
            <ul class="menu">
                <a href="index.login.php"><li>Cadastro</li></a>
                <a href="conex.cad.php"><li>Consultas</li></a>
            </ul>
        </nav>
        <section>
            <h1>Cadastro de Usuários</h1><br><br>

            <form action="#" method="POST">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn"><br><br>

                Usuário:<br>
                <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                Email:<br>
                <input type="email" name="email" class="campo" maxlength="50" required><br>
                Senha:<br>
                <input type="password" name="senha" class="campo" maxlength="32" required><br> 
            </form>
        </section>
    </div>
</body>
</html>