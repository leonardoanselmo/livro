<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>

	<?php 

		$xml = simplexml_load_file('paises.xml');

		echo "Nome: {$xml->nome} <br/>";
		echo "Idioma: {$xml->idioma} <br/>";
		echo "Religião: {$xml->religiao} <br/>";
		echo "Moeda: {$xml->moeda} <br/>";
		echo "População: {$xml->populacao} <br/>";

 	?>
	
</body>

</html>

