<?php 
	
	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}		
	}

	$sql = new TSqlSelect;
	$sql->setEntity('famosos');

	$sql->addColumn('codigo');
	$sql->addColumn('nome');

	$criteria = new TCriteria;
	$criteria->add(new TFilter('codigo', '=', '4'));

	$sql->setCriteria($criteria);

	try {

		$conn = TConnection::open('my_livro');

		$result = $conn->query($sql->getInstruction());
		if ($result) {
			$row = $result->fetch(PDO::FETCH_ASSOC);
			echo $row['codigo'].' - '.$row['nome']."<br/>";
		}
		$conn = null;

		
	} catch (PDOException $e) {
		print "Erro: ".$e->getMessage()."<br/>";
		die();
	}

 ?>