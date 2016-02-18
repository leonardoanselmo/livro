<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php"; 
		}
	}

	$criteria = new TCriteria;
	$criteria->add(new TFilter("nome", "like", "maria%"));
	$criteria->add(new TFilter("cidade", "like", "Porto%"));

	$criteria->setProperty('offset', 0);
	$criteria->setProperty('limit', 10);

	$criteria->setProperty('order', 'nome');

	$sql = new TSqlSelect;
	$sql->setEntity('aluno');

	$sql->addColumn('nome');
	$sql->addColumn('fone');

	$sql->setCriteria($criteria);

	echo $sql->getInstruction();
	echo "<br/>";

 ?>