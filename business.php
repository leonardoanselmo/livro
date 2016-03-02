<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}	
	}

	class AlunoRecord extends TRecord{

		function Inscrever($turma){

			$inscricao = new InscricaoRecord;
			$inscricao->ref_aluno = $this->id;
			$inscricao->ref_turma = $turma;
			$inscricao->store();

		}

	}

	class InscricaoRecord extends TRecord{}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log12.txt'));

		TTransaction::log('** inserindo o aluno carlos');

		$carlos = new AlunoRecord;
		$carlos->nome = 'Carlos Ranzi';
		$carlos->endereco = 'Rua Francisco Oscar';
		$carlos->telefone = '(55) 1234-5678';
		$carlos->cidade   = 'Lajeado';
		$carlos->store();

		TTransaction::log('** inserindo o aluno nas turmas');

		$carlos->Inscrever(1);
		$carlos->Inscrever(2);

		TTransaction::close();

	} catch (Exception $e) {

		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback();
			
	}

 ?>