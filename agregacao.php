<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregacao</title>
</head>
<body>
	<?php 

		include_once 'classes/Produto.class.php';
		include_once 'classes/Cesta.class.php';

		$produto1 = new Produto;
		$produto2 = new Produto;
		$produto3 = new Produto;
		$produto4 = new Produto;

		$produto1->Codigo = 1;
		$produto1->Descricao = "Ameixa";
		$produto1->Preco = 1.23;

		$produto2->Codigo = 2;
		$produto2->Descricao = "Abacaxi";
		$produto2->Preco = 1.71;

		$produto3->Codigo = 3;
		$produto3->Descricao = "Goiaba";
		$produto3->Preco = 1.82;

		$produto4->Codigo = 4;
		$produto4->Descricao = "Mamão";
		$produto4->Preco = 1.52;

		$cesta = new Cesta;
		$cesta->AdicionaItem($produto1);
		$cesta->AdicionaItem($produto2);
		$cesta->AdicionaItem($produto3);
		$cesta->AdicionaItem($produto4);
		
		echo "<br/>";
		echo $cesta->ExibeLista();
		echo "<br/>";
		echo $cesta->CalculaTotal();


	 ?>
</body>
</html>