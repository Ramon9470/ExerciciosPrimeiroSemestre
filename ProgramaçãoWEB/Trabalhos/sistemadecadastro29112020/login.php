<?php

  require("banco.php");

  if(isset($_POST["user"]) && isset($_POST["pass"]) && $conexao != null){
    $query = $conexao->prepare("SELECT * FROM login WHERE email = ? AND senha = ?");
    $query->execute(array($_POST["user"], $_POST["pass"]));

      if($query->rowCount()){
        $use = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        
        session_start();
        $_SESSION["usuario"] = array($use["nome"], $use["adm"]);
        
        echo "<script>window.location = 'painel.php'</script>";
      }else{
        echo "<script>window.location = 'index.php'</script>";
      }

  }else{
    echo "<script>window.location = 'index.php'</script>";
  }

 ?>
