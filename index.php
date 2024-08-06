<?php

    session_start();

?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CFPS - Centro de Formação e Prestação de Serviços">
    <meta name="description" content="Avaliação">
    <title>CFPS - Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="conteiner">
        <header class="header">
            <h1 class="title">Bem Vindo a Avaliação</h1>
        </header>
        <article class="article">
            <section class="section">
                <div class="formulary">
                   <fieldset>
                        <legend>Preencha Todos os Campos</legend>

                        <form action="processsa.php" method="post">
                            Nome:<br>
                            <input class="campos" type="text" name="nome" placeholder="Digite o seu Nome..." maxlength="30" autofocus required><br>
                            Senha:<br>
                            <input class="campos" type="password" name="senha" placeholder="Insira a senha..." maxlength="9" autofocus required>
                            <br>

                            <input class="btn one" type="submit" value="Entrar">
                            <input class="btn two" type="reset" value="Excluir">
                            <input class="btn three" type="button" value="Limpar">

                            <?php

                                if (isset($_SESSION['nao_autenticado'])):

                            ?>

                            <div class="erro">
                                Erro no Login!<br> Senha ou Usuário Invalidos.
                            </div>

                            <?php

                                endif;
                                unset($_SESSION['nao_autenticado']);

                            ?>
                            
                    </form>
                   </fieldset>
                </div>
            </section>
        </article>
        <footer>
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
    
    <script>
        //alert('Bem Vindo a Avaliação Caro Cursante!')
        //confirm('Tem certeza que esta bem preparado para esta Avaliação?')
    </script>
</body>
</html>