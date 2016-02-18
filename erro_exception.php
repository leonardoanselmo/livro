<?php 
	
	function Abrir($file = null){

		if (!$file) {
			throw new Exception('Falta o parametro com o nome do arquivo');			
		}
		if (!file_exists($file)) {
			throw new Exception('Arquivo não existe');			
		}
		if (!$retorno = @file_get_contents($file)) {
			throw new Exception('Impossivel ler o arquivo');			
		}
		return $retorno;

	}

	try {

		$arquivo = Abrir('/tmp/arquivo.dat');
		echo $arquivo;
		
	} catch (Exception $excecao) {

		echo $excecao->getFile() . ' : ' . $excecao->getLine() . ' : ' . $excecao->getMessage() . ' : ' . $excecao->getCode();
		
	}

 ?>