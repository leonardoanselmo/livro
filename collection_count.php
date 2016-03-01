<?php 
	
	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class AlunoRecord extends TRecord{}
	class TurmaRecord extends TRecord{}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log8.txt'));
		TTransaction::log('** Conta alunos de Lajeado');

		$criteria = new TCriteria;
		$criteria->add(new TFilter('cidade', '=', 'Lajeado'));

		$repository = new TRepository('Aluno');

		$count = $repository->count($criteria);

		echo "Total de Alunos de Lajeado: {$count} <br/>";

		TTransaction::log('** Conta Turmas');

		// sala 100 e turno T
		$criteria1 = new TCriteria;
		$criteria1->add(new TFilter('sala', '=', 100));
		$criteria1->add(new TFilter('turno', '=', 'T'));

		//sala 200 e turno M
		$criteria2 = new TCriteria;
		$criteria2->add(new TFilter('sala', '=', 200));
		$criteria2->add(new TFilter('turno', '=', 'M'));

		$criteria = new TCriteria;
		$criteria->add($criteria1, TExpression::OR_OPERATOR);
		$criteria->add($criteria2, TExpression::OR_OPERATOR);

		$repository = new TRepository('Turma');

		$count = $repository->count($criteria);

		echo "Total de turmas: {$count} <br/>";

		TTransaction::close();

	} catch (Exception $e) {
		
		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback();

	}

 ?>