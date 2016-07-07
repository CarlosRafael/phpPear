<?php
	include_once "conf/config.default.php";
	include_once MODEL_DIR."/Aluno.php";
	
	$aluno = new Aluno();
	
	$aluno->find();

	echo $aluno->lista();


