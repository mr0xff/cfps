<?php 
	$con = mysqli_connect ('localhost', 'root', '', 'cfps');
	//segundo formulario
	if (empty($_POST['username']) && empty($_POST['pass'])){
		print "
			<script>
				alert('Preecha todos os campos!');
				location = 'index.php';
			</script>
		";
	}

	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['pass']);

	// evitando xss
	$filter_user = htmlentities($username);
	$filter_pass = htmlentities($password);

	$sql = "INSERT INTO usuarios (
		username,
		passfrase,
		passdecode
	) VALUES(
		'$filter_user',
		md5('$filter_pass'),
		'$filter_pass'
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