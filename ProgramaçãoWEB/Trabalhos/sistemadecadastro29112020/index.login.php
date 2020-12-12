<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form action="page.php" class="form" action="POST">
    	<!--<img src="imagens/fundoo.jpg" alt="">-->
    	<div class="card">
    		<div class="card-top">
    			<h2 class="titulo">Painel de Login</h2>
    			<p>Usuário e Senha</p>
    		</div>

    		<div class="card-user btn">
	    		<label>Usuário</label>
	    		<input type="text" name="usuario" placeholder="Usuário de acesso"><br><br>
	    		<label>Senha</label>
	    		<input type="password" name="senha" placeholder="Senha de acesso"><br><br>
    			<label><input type="checkbox" name=""> Lembre-me</label><br>
    			<button type="submit" name="btn-entrar">Entrar</button><br><br>
    			<p>Ainda não tem conta?<a href="form.cadastro.php"> Cadastre-se aqui.</a></p>    			
    	</div>
    </form>	

</body>
</html>