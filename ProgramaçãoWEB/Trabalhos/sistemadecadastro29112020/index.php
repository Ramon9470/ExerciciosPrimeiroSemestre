<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="_css/estilo_login.css">
    <script src="_js/jaquary.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="_js/acessar.js"></script>

  </head>
  <body>
      <img src="_image/estacio.png" alt="">
      <form action="login.php" class="login-form" method="POST">
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" name="user" placeholder="Usuario" autofocus>
          <span data-placeholder="Usuario"></span>
        </div>

        <div class="txtb">
          <input type="password" name="pass" placeholder="Senha">
          <span data-placeholder="Senha"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">

        <div class="bottom-text">
          Ainda não tem uma conta? <a href="estilo_cad.php">Clique aqui pra criar.</a>
        </div>

      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>


  </body>
</html>
