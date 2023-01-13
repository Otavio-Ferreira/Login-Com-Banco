<?php
    $dbHost = 'LocalHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'login';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    
    /*if($conexao -> connect_errno){
        echo "Erro";
    }
    else{
        echo "Sucesso";
    } */ // Estrutura de teste de conexão do banco
?>