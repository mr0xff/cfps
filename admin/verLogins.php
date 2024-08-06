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
    <title>CFPS - Logins</title>
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
       			<section class="reg1">
       				<div>
       					<table border="0" width="100%" style="color: white">
                  <tr>
                    <th>Id</th>
                    <th>Nome do Usuário</th>
                    <th>Senha do Usuário</th>
                    <th>Senha em texto Puro</th>
                  </tr>

                    <?php 
                      $sql = "SELECT uid, username, passfrase, passdecode FROM usuarios WHERE 1";
                      $result = mysqli_query($conexao, $sql);

                      foreach ($result as $value):
                        // Code...
                    ?>

                    <tr>
                      <td><?php echo $value['uid']; ?></td>
                      <td><?php echo $value['username']; ?></td>
                      <td><?php echo $value['passfrase']; ?></td>
                      <td><?php echo $value['passdecode']; endforeach;?></td>
                    </tr>    
                </table>
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