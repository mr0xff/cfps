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
    <title>CFPS - Detalhes</title>
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
                <section>
                    <table border="0" width="100%" style="color: white">
                        <tr>
                            <th>Id</th>
                            <th>Primeiro Nome</th>
                            <th>Último Nome</th>
                            <th>Data de Nascimento</th>
                            <th>Número de Telefone</th>
                            <th>Localização</th>
                        </tr>

                        <?php 
                           $con = mysqli_connect('localhost', 'root', '', 'cfps');

                           $sql = "SELECT uid_d,primeiro_nome,ultimo_nome,data_de_nascimento,tel,gps FROM userDetalhes";
                           $response = mysqli_query ($con, $sql);
                          // $response = mysqli_fetch_array($response);

                           foreach ($response as $key => $value):
                                // code...
                         ?>

                         <tr>
                            <td><?php echo $value['uid_d']; ?></td> 
                            <td><?php echo $value['primeiro_nome']; ?></td> 
                            <td><?php echo $value['ultimo_nome']; ?></td> 
                            <td><?php echo $value['data_de_nascimento']; ?></td> 
                            <td><?php echo $value['tel']; ?></td> 
                            <td><?php echo $value['gps']; endforeach;?></td>
                         </tr>
                    </table>
                </section>
			</div>
        </article>
        <footer class="footer">
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
</body>
</html>