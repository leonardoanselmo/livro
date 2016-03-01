<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class InscricaoRecord extends TRecord{

		function get_aluno(){

			$aluno = new AlunoRecord($this->ref_aluno);			
			return $aluno;

		}

	}

	class AlunoRecord extends TRecord{

		function get_inscricoes(){

			$criteria = new TCriteria;
			$criteria->add(new TFilter('ref_aluno', '=', $this->id));

			$repository = new TRepository('Inscricao');
			return $repository->load($criteria);

		}

	}

	try {
		
		TTransaction::open('my_livro');
		TTransaction::setLogger(new TLoggerTXT('log11.txt'));

		TTransaction::log('** obtendo o aluno de uma inscricao');

		$inscricao = new InscricaoRecord(4);

		echo "Dados de inscricao <br/>";
		echo "================== <br/>";

		echo 'Nome:     '.$inscricao->aluno->nome."<br/>";
		echo 'Endereço: '.$inscricao->aluno->endereco."<br/";
		echo 'Cidade:   '.$inscricao->aluno->cidade."<br/>";

		TTransaction::log('** obtendo as inscricoes de um aluno');

		$aluno = new AlunoRecord(4);

		echo "<br/>";
		echo "Inscricoes de Aluno <br/>";
		echo "=================== <br/>";

		foreach ($aluno->inscricoes as $inscricao) {
			echo ' ID:    '.$inscricao->id;
			echo ' Turma: '.$inscricao->ref_turma;
			echo ' Nota:  '.$inscricao->nota;
			echo ' Freq.  '.$inscricao->frequencia;
			echo "<br/>";
		}

		TTransaction::close();

	} catch (Exception $e) {

		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback();
		
	}

 ?>