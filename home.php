<?php
    include_once("verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-ao">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CFPS - Centro de Formação e Prestação de Serviços">
    <meta name="description" content="Avaliação">
    <title>CFPS - Informações Pessoais</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
    <div class="content">
        <nav>
            <div class="titulo">
                <h1>CFPS</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Info</a></li>
                    <li><a href="avaliacao.php">Avaliação</a></li>
                    <li><a href="provas.php">Provas</a></li>
                    <?php
                    if ($_COOKIE['user_id'] == base64_encode(1)){
                    print "<li><a href='admin/index.php'>Painel Admin</a></li>";
                    }
                    ?>
                    <li><a href="logout.php">Terminar Sessão</a></li>
                </ul>
            </div>
        </nav>
        <article class="artigo">
           <div class="session">
                <section class="sessao">
                <h2 class="username">
                    <?php 
                        print $_SESSION['usuario'];
                     ?>
                </h2>
                <?php 
                    include_once "info.php";
                ?>
                </section>
           </div>
        </article>
        <footer>
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
</body>
</html>