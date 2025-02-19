<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'db_login'; //nome fictício

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //conferir conexão
    // if($conexao->connect_errno){
    //     echo "Erro";
    // } else{
    //     echo "Conexão feita com sucesso";
    // }
?>