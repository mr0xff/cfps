<?php 
    include_once("../conexao.php");

    if ($_COOKIE['user_id'] != base64_encode(1)){
        header('location: ../home.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CFPS - Centro de Formação e Prestação de Serviços">
    <meta name="description" content="Avaliação">
    <title>CFPS - Admin Painel</title>
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/avaliacao.css">
   </head>
<body>
    <div class="content">
        <nav>
            <div class="titulo">
                <h1>CFPS</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../home.php">Informações-Pessoais</a></li>
                    <li><a href="../avaliacao.php">Avaliação</a></li>
                    <li><a href="../provas.php">Provas</a></li>
                    <li><a href="index.php">Painel Admin</a></li>
                </ul>
            </div>
        </nav>
        <article class="artigo">
            <div class="session">
                <section class="sessions reg1">
                    <div class="first-form">
                        <form method="post" action="adduser001.php">
                            <input type="text" name="pname" required placeholder="Primeiro Nome" autofocus>
                            <input type="text" name="uname" required placeholder="Último Nome">
                            <input type="date" name="data_nascimento" required title="Sua Data de Nascimento">
                            <input type="tel" name="telefone" maxlength="9" required placeholder="Número de Telefone">
                            <input type="cpf" name="gps" required placeholder="Sua Localização">

                            <button>Registrar</button>
                        </form>
                    </div>
                </section>
                <section class="sessions2 reg2">
                    <div class="secand-form">
                        <form method="post" action="adduser002.php">
                            <input type="text" name="username" required placeholder="Nome de Usuário" autofocus>
                            <input type="text" name="pass" required placeholder="Senha para o Usuário"><br>

                            <button>Registrar</button>
                        </form>
                    </div>
              <div id="Force">
                    <ul >
                        <a href="verDetalhes.php">Ver Datalhes Dos Usuários</a>
                        <a href="verLogins.php">Ver os Logins no Banco de Dados</a>
                    </ul>
                </div>
                </section>
            </div>
        </article>
        <footer class="footer">
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
</body>
</html>