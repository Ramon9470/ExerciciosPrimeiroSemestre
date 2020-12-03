<?php
//chamar a conexão do banco de dados
require_once 'conexao_bd.php';

//iniciar a cessão
session_start();

if (isset($_POST['Entrar'])):
 $erros = array();
 $login = mysqli_scape_string($connect, $_POST['login']);
 $senha = mysqli_scape_string($connect, $_POST['senha']);

  if (empty($login) or empty($senha)):
    $erros[] = "<li> Preencha todos os campos! </li>";
  
  else:
    $sql = "SELECT login FROM usuario WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql); 
    
    if (mysql_num_rows($resultado) > 0):
      $senha = md5($senha); //descriptografar a senha
      $sql = "SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'";
      $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) == 1):
          $dados = mysqli_fetch_array($resultado); //converter resultado em uma array e atribuir para variável DADOS
          mysqli_close($connect);
          $_SESSION['logado com sucesso'] = true;
          $_SESSION['id_user'] = $dados['id'];
          header('Location: pagina_inicio.php');

        else:
          $erros[] = "<li> Usuário ou senha não conferem!</li>";
        endif;
    else:
      $erro[] = "<li> Usuário não existe. </li>";
    endif;
  endif;

endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    
  </head>
  <body>
    <?php
    //Verificar se o campo estiver vazio
    if (!empty($erros)):
      foreach ($erros as $erro):
        echo $erro;
      endforeach;
    endif;

    ?>

    <h1>Login</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Login: <input type="text" name="login"><br>
      Senha: <input type="password" name="senha"><br>
      <button type="submit" name="btn-entrar">Entrar</button>
      <a href="cadastro.php" id="forgot-pass">Cadastre-se aqui</a>
    </form>
  </body>
</html>
