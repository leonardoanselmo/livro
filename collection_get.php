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

		$criteria = new TCriteria;
		$criteria->add(new TFilter('nota', '>=', 7));
		$criteria->add(new TFilter('frequencia', '>=', 75));
		$criteria->add(new TFilter('ref_turma', '=', 1));
		$criteria->add(new TFilter('cancelada', '=', 1));

		$repository = new TRepository('Inscricao');
		$inscricoes = $repository->load($criteria);

		if ($inscricoes) {
			echo "Inscricoes retornadas <br/>";
			echo "===================== <br/>";

			foreach ($inscricoes as $inscricao) {
				echo ' ID: '.$inscricao->id;
				echo ' Aluno: '.$inscricao->ref_aluno;

				$aluno = new AlunoRecord($inscricao->ref_aluno);

				echo ' Nome: '.$aluno->nome;
				echo ' Endereco: '.$aluno->endereco;
				echo "<br/>";
			}
		}

		TTransaction::close();


	} catch (Exception $e) {

		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>