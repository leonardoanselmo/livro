<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Objetos </title>
</head>
<body>
	<?php 

		include_once 'classes/Produto.class.php';

		$produto1 = new Produto;
		$produto2 = new Produto;

		$produto1->Codigo = 4001;
		$produto1->Descricao = 'The Beatles';

		$produto2->Codigo = 4002;
		$produto2->Descricao = 'Eng. do Hawaii';
		
		$produto1->ImprimeEtiqueta();
		$produto2->ImprimeEtiqueta();

	 ?>
</body>
</html>