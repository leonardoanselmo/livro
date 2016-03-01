<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class AlunoRecord     extends TRecord{}
	class TurmaRecord     extends TRecord{}
	class InscricaoRecord extends TRecord{}

	try {

		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log6.txt'));

		$criteria = new TCriteria;

		$criteria->add(new TFilter('turno', '=', 'T'));
		$criteria->add(new TFilter('encerrada', '=', 1));

		$repository = new TRepository('Turma');

		$turmas = $repository->load($criteria);
		if ($turmas) {
			
			echo "Turmas retornadas <br/>";
			echo "================= <br/>";

			foreach ($turmas as $turma) {
				echo ' ID: '.$turma->id;
				echo ' Dia: '.$turma->dia_semana;
				echo ' Sala: '.$turma->sala;
				echo ' Turno: '.$turma->turno;
				echo ' Professor: '.$turma->professor;
				echo '<br/>';
			}
		}

		TTransaction::close();


	} catch (Exception $e) {

		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>