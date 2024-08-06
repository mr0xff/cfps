<?php 
	$con = mysqli_connect ('localhost', 'root', '', 'cfps');

	if (empty($_POST['pname'])){
		header('location: index.php');
		exit();
	}

	//adduser with php on db mysql
	//primeiro formulario
	$p_name = mysqli_real_escape_string($con,$_POST['pname']);
	$u_name = mysqli_real_escape_string($con,$_POST['uname']);
	$data_nasc = mysqli_real_escape_string($con,$_POST['data_nascimento']);
	$tel = mysqli_real_escape_string($con,$_POST['telefone']);
	$location = mysqli_real_escape_string($con,$_POST['gps']);

	// evitando xss
	$filter1 = htmlentities($p_name);
	$filter2 = htmlentities($u_name);
	$filter3 = htmlentities($data_nasc);
	$filter4 = htmlentities($tel);
	$filter5 = htmlentities($location);

	$sql = "INSERT INTO userDetalhes (
		primeiro_nome,
		ultimo_nome,
		data_de_nascimento,
		tel,
		gps) VALUES (
		
		'$filter1',
		'$filter2',
		'$filter3',
		'$filter4',
		'$filter5'
		)";
	
	$resposta = mysqli_query($con, $sql);
	if (!$resposta){
		print "<script> alert('Falha na INSERÇÃO dos dados!')</script>";
		exit();
	}else{
		print "
		<script> 
			alert('Dados Inserido com sucesso!');
			setInterval (function(){
				location = 'index.php'	
			}, 3000);	
			document.write('Aguarde por um instante ...');
		</script>";
	}


 ?>