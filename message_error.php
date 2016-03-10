<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	new TMessage('error', 'Agora eu estou falando sério. Esse erro é fatal!');
	
 ?>