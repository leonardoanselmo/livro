<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class TurmaRecord extends TRecord{

		function set_dia_semana($valor){
			if (is_int($valor) and ($valor>=1) and ($valor<=7)) {

				$this->data['dia_semana'] = $valor;
				
			} else {

				echo "Tentou atribui '{$valor}' em dia_semana <br/>";

			}
		}

		function set_turno($valor){
			if (($valor == 'M') or ($valor == 'T') or ($valor == 'N')) {
				$this->data['turno'] = $valor;
			} else {
				echo "Tentou atribuir '{$valor}' em turno <br/> ";
			}
		}

	}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log10.txt'));

		TTransaction::log('** inserindo turma 1');

		$turma = new TurmaRecord;

		$turma->dia_semana  = 1;
		$turma->turno       = 'M';
		$turma->professor   = 'Carlo Bellini';
		$turma->sala        = '100';
		$turma->data_inicio = '2009-09-01';
		$turma->encerrada   = 1;
		$turma->ref_curso   = 2;

		$turma->store();

		TTransaction::log('** inserindo turma 2');

		$turma = new TurmaRecord;
		$turma->dia_semana  = 'Segunda';
		$turma->turno       = 'Manhã';
		$turma->professor   = 'Sérgio Crespo';
		$turma->sala        = '100';
		$turma->data_inicio = '2004-09-01';
		$turma->encerrada   = 1;
		$turma->ref_curso   = 3;

		TTransaction::close();

		echo "Registros inseridos com sucesso. </br>";


	} catch (Exception $e) {

		echo "<b>Erro</b>".$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>