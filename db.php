<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		//resp
		$resposta1 = $_COOKIE['resposta1'];
		$resposta2 = $_COOKIE['resposta2'];
		$resposta3 = $_COOKIE['resposta3'];

		$arry = [$resposta1, $resposta2, $resposta3];
		//resp certa
		$pontos = 0;
		if($resposta1 == 1){
			$pontos += 1;
		}
		if ($resposta2 == 2){
			$pontos += 1;
		}
		if ($resposta3 == 3){
			$pontos += 1;
		}
		echo "Voce teve: ".$pontos;
	?>
</body>
</html>