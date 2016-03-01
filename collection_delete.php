<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class TurmaRecord extends TRecord{}
	class InscricaoRecord extends TRecord{}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log9.txt'));

		TTransaction::log('** excluir as turmas da tarde');

		$criteria = new TCriteria;
		$criteria->add(new TFilter('turno', '=', 'T'));

		$repository = new TRepository('Turma');
		$turmas = $repository->load($criteria);

		if ($turmas) {
			foreach ($turmas as $turma) {
				$turma->delete();
			}
		}

		// exclui as inscricoes do aluno 1

		TTransaction::log('** exclui as inscricoes do aluno 3');

		$criteria = new TCriteria;
		$criteria->add(new TFilter('ref_aluno', '=', 3));

		$repository = new TRepository('Inscricao');
		$repository->delete($criteria);

		echo "Registros excluidos com sucesso. <br/>";

		TTransaction::close();

	} catch (Exception $e) {

		echo '<b>Erro.</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>