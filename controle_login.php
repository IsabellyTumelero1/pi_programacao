<?php
session_start();
    //print_r($_REQUEST);

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){
        //acessa o sistema caso haja o 'submit' e o email e a senha esteja vazio
        include_once('config.php'); //inclusão da conexão com bd
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //TESTE
        // print_r($email);
        // print_r($senha);

        $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'"; //verifica se os parâmentros existem no banco de dados

        $result = $conexao->query($sql); 

        //TESTE
        // print_r($result);

        //Verifica se as informações de login existe no banco de dados ou não
        if(mysqli_num_rows($result) < 1){
            //verifica se a quantidade de linhas da variável $result é menor que 1
            //print_r("Não existe");
            unset($_SESSION['email']); //destrói qualquer email ou senha que não tiver resgistro
            unset($_SESSION['senha']);
            header('Location: login.php');
        } else{
            //caso a quantidade for maior que 1
            //print_r("Existe");
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: /pi_programacao');
        }
    }else {
        header(('Location: login.php')); //retorna para login caso não acesse
    }
?>