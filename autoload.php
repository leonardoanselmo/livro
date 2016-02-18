<?php 
	
	function __autoload($classe){
		include_once "classes/{$classe}.class.php";
	}

	$bolo = new Produto(500, "Bolo de rolo", 3, 4.12);
	echo "Descrição: {$bolo->Descricao} <br/>";
	echo "Preço: {$bolo->Preco} <br/>";

 ?>