
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CFPS - Centro de Formação e Prestação de Serviços">
    <meta name="description" content="Avaliação">
    <title>CFPS - Avaliação</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/avaliacao.css">
   </head>
<body>
    <div class="content">
        <nav>
            <div class="titulo">
                <h1>CFPS</h1>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="home.php">Informações-Pessoais</a></li>
                    <li><a href="avaliacao.php">Avaliação</a></li>
                    <li><a href="provas.php">Provas</a></li>
                </ul>
            </div>
        </nav>
        <article class="artigo">
           <div class="session">
                <section class="sessao">
                <?php
                        $resposta5 = $_POST['caixa'];
                        setcookie("resposta5", $resposta5);
                    ?>
                    <h1>Quantos blocos tem o teclado?</h1>

                    <form method="POST" action="avaliacao6.php">
                        <div class="input">
                            <label for="caixa">
                                <input class="campos" type="radio" name="caixa" id="caixa" value="1" required>
                                5
                            </label>
                            </div>

                        <div class="input">
                            <label for="caixas">
                                <input class="campos" type="radio" name="caixa" id="caixas" value="2" required>
                                4
                            </label>
                        </div>

                        <div class="input">
                            <label for="caixao">
                                <input class="campos" type="radio" name="caixa" id="caixao" value="3" required>
                                3
                            </label>
                        </div>
                        <br><br>

                        <div class="botoes">
                            <input type="submit" value="OK" class="botao">
                        </div>
                        </form> 
                </section>
           </div>
        </article>
        <footer class="footer">
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
</body>
</html>