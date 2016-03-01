<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class InscricaoRecord extends TRecord{}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log7.txt'));
		TTransaction::log('** seleciona inscricoes da turma 2');

		$criteria = new TCriteria;
		$criteria->add(new TFilter('ref_turma', '=', 2));
		$criteria->add(new TFilter('cancelada', '=', 1));

		$repository = new TRepository('Inscricao');
		$inscricoes = $repository->load($criteria);

		if ($inscricoes) {
			TTransaction::log("** altera as inscricoes");
			foreach ($inscricoes as $inscricao) {
				$inscricao->nota = 8;
				$inscricao->frequencia = 75;

				$inscricao->store();
			}
		}

		TTransaction::close();

	} catch (Exception $e) {

		echo '<b>Erro.</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>