<?php
session_start();

//Se qualquer uma das variáveis de sessão (email ou senha) não estiver definida ou estiver vazia, ele irá desconfigurar as variáveis de sessão e redirecionar para a página de login.
if ((!isset($_SESSION['email']) || !isset($_SESSION['senha'])) || empty($_SESSION['email']) || empty($_SESSION['senha'])) {
    unset($_SESSION['email']); // Destrói qualquer email ou senha que não tiver registro
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['email'];

include "./includes/header.php";
include "./includes/conteudo.php";
include "./includes/carrossel.php";
include "./includes/feedback.php";
include "./includes/footer.php";
?>