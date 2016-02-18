<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Protected</title>
</head>
<body>
	<?php 

		include_once 'classes/Funcionario.class.php';
		include_once 'classes/Estagiario.class.php';

		$pedrinho = new Estagiario;
		$pedrinho->SetSalario(248);
		echo "O Salário do Pedrinho é de R$ {$pedrinho->GetSalario()} <br/>";

	 ?>
</body>
</html>