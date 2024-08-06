
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
                        $resposta6 = $_POST['caixa'];
                        setcookie("resposta6", $resposta6);
                    ?>
                    <h1>Qual a tecla responsável por mover o cursor para o fim da página corrente?</h1>

                    <form method="POST" action="avaliacao7.php">
                        <div class="input">
                            <label for="caixa">
                                <input class="campos" type="radio" name="caixa" id="caixa" value="1" required>
                                Page Down
                            </label>
                            </div>

                        <div class="input">
                            <label for="caixas">
                                <input class="campos" type="radio" name="caixa" id="caixas" value="2" required>
                                Page Up
                            </label>
                        </div>

                        <div class="input">
                            <label for="caixao">
                                <input class="campos" type="radio" name="caixa" id="caixao" value="3" required>
                                END
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