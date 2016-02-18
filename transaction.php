<?php 
	
	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	try {
		
		TTransaction::open('my_livro');

		$sql = new TSqlInsert;
		$sql->setEntity('famosos');

		$sql->setRowData('codigo', 8);
		$sql->setRowData('nome', 'Galileu');

		$conn = TTransaction::get();
		$result = $conn->Query($sql->getInstruction());

		$sql = new TSqlUpdate;
		$sql->setEntity('famosos');

		$sql->setRowData('nome_', 'Galileu Galilei');

		$criteria = new TCriteria;
		$criteria->add(new TFilter('codigo', '=', '8'));
		$sql->setCriteria($criteria);

		$conn = TTransaction::get();
		$result = $conn->query($sql->getInstruction());

		TTransaction::close();

	} catch (Exception $e) {

		echo $e->getMessage();
		TTransaction::rollback();
		
	}

 ?>