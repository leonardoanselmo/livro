<?php 
	
	function Abrir($file = null){

		if (!$file) {
			throw new ParameterException("Falta o parametro com o nome do arquivo");			
		}
		if (!file_exists($file)) {
			throw new FileNotFoundException("Arquivo não existe");			
		}
		if (!$retorno = @file_get_contents($file)) {
			throw new FilePermissionException("Impossivel ler o arquivo.");			
		}
		return $retorno;

	}

	class ParameterException extends Exception{};
	class FileNotFoundException extends Exception{};
	class FilePermissionException extends Exception{};

	try {

		$arquivo = Abrir('/tmp/arquivo.dat');
		echo $arquivo;
		
	} catch (FileNotFoundException $excecao) {

		print_r($excecao->getTrace());
		echo "Finalizando aplicação... <br/>";
		die();
		
	}

 ?>