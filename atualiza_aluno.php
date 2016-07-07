<html>
	<head>
		<meta charset="UTF-8" />
	</head>
	<body>
<?php
	include_once "conf/config.default.php";
	include_once MODEL_DIR."/Aluno.php";
	
	$aluno = new Aluno();
	$aluno->get(0);
	$aluno->setNome("Joaquim");
	if(!($aluno->update())){
		$id = $aluno->insert();
		echo 'O resgistro '.$id. ' ao existia <br/>Entao foicriado';
	}
	else
		echo 'Registro '.$id.' com novo nome: '.$aluno->getNome();
?>
	</body>
</html>
