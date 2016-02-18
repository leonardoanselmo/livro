<?php 

	function Abrir($file = null){
		if (!$file) {
			return false;
		}
		if (!file_exists($file)) {
			return false;
		}
		if (!$retorno = @file_get_contents($file)) {
			return false;
		}
		return $retorno;
	}

	$arquivo = Abrir('/tmp/arquivo.dat');

	if (!$arquivo) {
		echo "Falha ao abrir o arquivo.";
	} else {
		echo $arquivo;
	}

	echo "Ola Mundo !!!";


 ?>