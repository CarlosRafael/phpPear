<html>
	<head>
		<meta charset="UTF-8" />
	</head>
	<body>
<?php
	include_once "conf/config.default.php";
	include_once MODEL_DIR."/Aluno.php";
	
	$aluno = new Aluno();
	$aluno->get();
	$aluno->find();

	echo $aluno->lista();

?>
	</body>
</html>
