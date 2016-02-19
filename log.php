<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	try {
		
		TTransaction::open('my_livro');

		TTransaction::setLogger(new TLoggerHTML('arquivo.html'));
		TTransaction::log("Inserindo registro William Wallace");

		$sql = new TSqlInsert;
		$sql->setEntity('famosos');

		$sql->setRowData('codigo', 9);
		$sql->setRowData('nome', 'William Wallace');

		$conn = TTransaction::get();
		$result = $conn->Query($sql->getInstruction());

		TTransaction::log($sql->getInstruction());

		TTransaction::setLogger(new TLoggerXML('arquivo.xml'));
		TTransaction::log("Inserindo registro Albert Einstein");

		$sql = new TSqlInsert;
		$sql->setEntity('famosos');

		$sql->setRowData('codigo', 10);
		$sql->setRowData('nome', 'Albert Einstein');

		$conn = TTransaction::get();
		$result = $conn->Query($sql->getInstruction());

		TTransaction::log($sql->getInstruction());

		TTransaction::close();

	} catch (Exception $e) {

		echo $e->getMessage();
		TTransaction::rollback();
		
	}

 ?>