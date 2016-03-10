<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	new TMessage('info2', 'Está ação é inofensiva, isto é, só um lembrete');

 ?>