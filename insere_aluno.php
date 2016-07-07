<html>
	<head>
		<meta charset="UTF-8" />
	</head>
	<body>
<?php
	include_once "conf/config.default.php";
	include_once MODEL_DIR."/Aluno.php";
	
	$aluno = new Aluno();
	$aluno->setNome("Joao");
	$aluno->setTelefone("333-555-777");
	$id = $aluno->insert();
	
	echo 'Aluno inserido com id '.$id;
?>
	</body>
</html>
