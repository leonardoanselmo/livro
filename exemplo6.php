<?php 

	$xml = simplexml_load_file('paises3.xml');

	echo "Nome: {$xml->nome} <br/>";
	echo "Idioma: {$xml->idioma} <br/><br/>";

	foreach ($xml->estados->nome as $estado) {
		echo "Estado: {$estado} <br/>";
	}

 ?>