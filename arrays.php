<?php 
/*
	$palavras = array('all', 'almost', 'air', 'all right', 'able', 'agree', 'again', 'against', 
					  'absolutely', 'a', 'add', 'action', 'act', 'actually', 'about', 'accept',
					  'afford', 'afraid', 'after', 'afternoon', 'age', 'ago', 'ahead', 'allow',
					  'along', 'account', 'ago');
	$aleatorio = array_rand($palavras, 10);

	foreach ($aleatorio as $ale) {
		echo "$palavras[$ale] <br/>";
	}
*/

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	try {
		
		TTransaction::open('my_livro');

		$sql = new TSqlSelect;
		$sql->setEntity('dicionario');

		$sql->addColumn('palavras');
		
		$conn = TTransaction::get();
		$result = $conn->Query($sql->getInstruction());	
				
		if ($result) {
			foreach ($result as $row) {				
				$arrays_palavras[] = $row['palavras'];
			}
		} else {
			echo "Dados não encontrado";
		}

		$aleatorio = array_rand($arrays_palavras, 10);

		foreach ($aleatorio as $ale) {
			echo "$arrays_palavras[$ale] <br/>";
		}
		
		TTransaction::close();

	} catch (Exception $e) {

		echo $e->getMessage();
		TTransaction::rollback();
		
	}


 ?>