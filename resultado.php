<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		terminado a avaliacao !
		<?php
             $resposta10 = $_POST['caixa'];
             setcookie("resposta10", $resposta10);

             header("location: keep/tratamento.php");
        ?>
	</div>
</body>
</html>