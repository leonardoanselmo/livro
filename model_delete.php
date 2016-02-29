<?php 
	
	
	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class AlunoRecord extends TRecord{}
	class CursoRecord extends TRecord{}


	try {
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log5.txt'));

		TTransaction::log("** Apagando da primeira forma");

		$aluno = new AlunoRecord(1);
		$aluno->delete();

		TTransaction::log("** Apagando da segunda forma");
		$modelo = new AlunoRecord;
		$modelo->delete(2);

		TTransaction::close();

		echo "Exclusão realizada com sucesso. <br/>";

	} catch (Exception $e) {

		echo "<b>Erro</b>".$e->getMessage();
		TTransaction::rollback();

	}

 ?>