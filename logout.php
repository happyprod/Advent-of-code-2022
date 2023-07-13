<?php
    error_reporting(0);

    session_start();

    // Remove todas as variáveis de sessão
    session_unset();

    unset($_SESSION['email']);


    // Destrói a sessão
    session_destroy();

    // Remove o cookie
    setcookie(session_name(), '', time() - 3600);

    // Redireciona para a página de login
    header("Location: login.php");
?>
