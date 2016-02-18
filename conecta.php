<?php

	$link = new PDO('mysql:host=localhost;port=3307;dbname=livro', 'root', '');
	if (!$link) {
    	die('Não foi possível conectar: ');
	}
	
	echo 'Conexão bem sucedida';
	$link = null;
	
?>