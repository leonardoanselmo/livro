<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>GET</title>
</head>
<body>
	<?php 

		include_once 'classes/Produto.class.php';

		$produto = new Produto(1, 'Pendrive 512Mb', 1, 100);
		echo $produto->Preco;

	 ?>
</body>
</html>