<?php

    //fechar cessão
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.login.php');

?>