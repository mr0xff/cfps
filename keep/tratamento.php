<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="CFPS - Centro de Formação e Prestação de Serviços">
    <meta name="description" content="Avaliação">
    <title>CFPS - Avaliação</title>
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
                </ul>
            </div>
        </nav>
        <article class="artigo">
           <div class="session">
                <section class="sessao">
	<?php 

			session_start();

			include_once("../conexao.php");

			$pontos = 0;

			//respostas
			$resp1 = $_COOKIE['resposta1'];	
			$resp2 = $_COOKIE['resposta2'];
			$resp3 = $_COOKIE['resposta3'];
			$resp4 = $_COOKIE['resposta4'];
			$resp5 = $_COOKIE['resposta5'];
			$resp6 = $_COOKIE['resposta6'];
			$resp7 = $_COOKIE['resposta7'];
			$resp8 = $_COOKIE['resposta8'];
			$resp9 = $_COOKIE['resposta9'];
			$resp10 = $_COOKIE['resposta10'];

			if($resp1 == 1){
				$pontos += 1;
			}
			if($resp2 == 1){
				$pontos += 1;
			}
			if($resp3 == 2){
				$pontos += 1;
			}
			if($resp4 == 3){
				$pontos += 1;
			}
			if($resp5 == 3){
				$pontos += 1;
			}
			if($resp6 == 3){
				$pontos += 1;
			}
			if($resp7 == 3){
				$pontos += 1;
			}
			if($resp8 == 2){
				$pontos += 1;
			}
			if($resp9 == 3){
				$pontos += 1;
			}
			if($resp10 == 2){
				$pontos += 1;
			}
		
			$uid = $_COOKIE['user_id'];
			/*print "Pontos: ".$pontos;
			print "<br>UID: ".$uid;*/
			
			$insercao = "INSERT INTO pontos_tb (id_user,pontos) VALUES ($uid, $pontos)";
			//$consulta = mysqli_query($conexao,$insercao);

			if (mysqli_query($conexao,$insercao)){
				echo "";
			} else {
				print "<h2 style='font-size:25px;text-align:center;color:#f00'>Erro na Inserção de dados!</h2>";
			}
			mysqli_close($conexao);
			
			print "<p class='result' style='font-size:38px;text-align:center;color:#fff;line-height:500px'>Resultado Final: $pontos/10 valores</p>"; 
	 ?>
	 </section>
           </div>
        </article>
        <footer class="footer">
                <p><strong>Copy&copy;Right 2021 CFPS - Centro de Formação e Prestação de Serviços</strong></p>
        </footer>
    </div>
</body>
</html>