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
		TTransaction::setLogger(new TLoggerTXT('log3.txt'));

		TTransaction::log('** Obtendo o aluno 1');

		$record = new AlunoRecord;
		$aluno = $record->load(1);
		if ($aluno) {
			$aluno->telefone = ('(55) 1111-3333');
			TTransaction::log('** Persistindo o aluno 1');
			$aluno->store();
		}

		TTransaction::log('** Obtendo o curso 1');

		$record = new CursoRecord;
		$curso = $record->load(1);
		if ($curso) {
			$curso->duracao = 28;
			TTransaction::log('** Persistindo o curso 1');
			$curso->store();
		}

		TTransaction::close();
		echo 'Registros alterados com sucesso.'.'<br/>';


	} catch (Exception $e) {

		echo '<b>Erro.</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>