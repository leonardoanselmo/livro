<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Composicao</title>
</head>
<body>
	<?php 

		include_once 'classes/Fornecedor.class.php';
		include_once 'classes/Contato.class.php';

		$fornecedor = new Fornecedor;
		$fornecedor->RazaoSocial = "Plugue Informática";

		$fornecedor->SetContato("Leonardo Anselmo", "9.9993-1184", "leonardo_anselmo@hotmail.com");

		//var_dump($fornecedor);

		echo "Fornecedor: {$fornecedor->RazaoSocial} <br/>";
		echo "Informações de Contato <br/>";
		echo "Contato: {$fornecedor->GetContato()} <br/>";

	 ?>
</body>
</html>