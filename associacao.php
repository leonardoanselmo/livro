<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Associacao</title>
</head>
<body>
	<?php 

		include_once 'classes/Produto.class.php';
		include_once 'classes/Fornecedor.class.php';

		$fornecedor = new Fornecedor;
		$fornecedor->Codigo = 848;
		$fornecedor->RazaoSocial = "Bom Gosto Alimentos SA";
		$fornecedor->Endereco = "Rua Ipiranga";
		$fornecedor->Cidade = "Poços de Caldas";

		$produto = new Produto;
		$produto->Codigo = 462;
		$produto->Descricao = "Doce de Pêssego";
		$produto->Preco = 1.24;
		$produto->Fornecedor = $fornecedor;
		
		echo "   Código do Produto: {$produto->Codigo} <br/>";
		echo "Descrição do Produto: {$produto->Descricao} <br/>";
		echo "Código do Fornecedor: {$produto->Fornecedor->Codigo} <br/>";
		echo "Descrição do Fornecedor: {$produto->Fornecedor->RazaoSocial} <br/>";

	 ?>
</body>
</html>