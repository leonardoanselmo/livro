<?php 
	
	function Abrir($file = null){
		if (!$file) {
			die('Falta o parametro com o nome do arquivo.');
		}
		if (!file_exists($file)) {
			die('Arquivo não existe.');
		}
		if (!$retorno = @file_get_contents($file)) {
			die('Impossível ler o arquivo.');
		}
		return $retorno;
	}

	$arq = Abrir();
	echo $arquivo;
	echo "Ola Mundo !!!";

 ?>