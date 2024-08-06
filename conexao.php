<?php

    //criando a conexao com o banco de dados
    $conexao = mysqli_connect('localhost','root','','cfps');

    //checando a conexao com o banco de dados
    if (mysqli_connect_errno($conexao)) {
        echo "<p style='color:red'>
        Erro na conexão com o Banco de Dados: .
        mysqli_connect_error()
        </p>";
    } 
        
?>