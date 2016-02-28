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
		TTransaction::setLogger(new TLoggerTXT('log2.txt'));

		echo "Obtendo Alunos <br/>";
		echo "============== <br/>";

		$aluno = new AlunoRecord(1);
		echo '    nome: '.$aluno->nome.'<br/>';
		echo 'endereco: '.$aluno->endereco.'<br/>';

		$aluno = new AlunoRecord(2);
		echo '    nome: '.$aluno->nome.'<br/>';
		echo 'endereco: '.$aluno->endereco.'<br/>';

		echo '<br/>';
		echo 'Obtendo alguns cursos <br/>';
		echo '===================== <br/>';

		$curso = new CursoRecord(1);
		echo 'curso: '.$curso->descricao.'<br/>';

		$curso = new CursoRecord(2);
		echo 'curso: '.$curso->descricao.'<br/>';

		TTransaction::close();


	} catch (Exception $e) {

		echo '<b>Erro</b>'.$e->getMessage();
		TTransaction::rollback;
		
	}

 ?>