<?php

    session_start();

    include_once("conexao.php");
    
    if (empty($_POST['nome']) || empty($_POST['senha'])) {
        header('location: index.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao,$_POST['nome']);
    $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

    $query = "SELECT uid,username,passfrase FROM usuarios WHERE username = '{$usuario}' AND passfrase = md5('{$senha}')";

    $resultado = mysqli_query($conexao,$query);

    $row = mysqli_num_rows($resultado);


    foreach ($resultado as $key) {
        if ($row == 1) {
            setcookie('user_id', base64_encode($key['uid']));
            $_SESSION['usuario'] = $usuario;
            header('location: home.php');
            exit();
        }
    }
    
    $_SESSION['nao_autenticado'] = true;
    header('location: index.php');
    exit();
?>