<?php 

	$xml = simplexml_load_file("paises2.xml");

	$xml->populacao = "220 milhoes";
	$xml->religiao = "cristianismo";
	$xml->geografia->clima = "temperado";

	$xml->addChild('presidente', 'Dilma Rusself');

	echo $xml->asXML();

	file_put_contents('paises2.xml', $xml->asXML());

 ?>