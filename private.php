<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Uso do Private</title>
</head>
<body>
	<?php 

		include_once 'classes/Funcionario.class.php';

		$pedro = new Funcionario;
		$pedro->SetSalario(876);

		echo "Salário é de R$: {$pedro->GetSalario()} <br/>";

	 ?>
</body>
</html>