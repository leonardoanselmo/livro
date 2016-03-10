<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	class Mundo extends TPage{

		function ola($param){
			echo 'Olá meu amigo '.$param['nome'];
		}

	}

	$pagina = new Mundo;
	$pagina->show();

 ?>	