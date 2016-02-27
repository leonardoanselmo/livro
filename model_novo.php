<?php 

	function __autoload($classe){
		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}
	}

	class AlunoRecord extends TRecord{}
	class CursoRecord extends TRecord{}

	try {
		TTransaction::open("my_livro");
		TTransaction::setLogger(new TLoggerTXT('log1.txt'));

		TTransaction::log("** inserindo alunos");

		$daline = new AlunoRecord;
		$daline->nome     = 'Dalline Dall Oglio';
		$daline->endereco = 'Rua da Conceicao';
		$daline->telefone = '(51) 1111-2222';
		$daline->cidade   = 'Cruzeiro do Sul';
		$daline->store();

		$william = new AlunoRecord;
		$william->nome     = 'William Scatolla';
		$william->endereco = 'Rua de Fátima';
		$william->telefone = '(51) 1111-2222';
		$william->cidade   = 'Encantado';
		$william->store();

		TTransaction::log('** Inserindo cursos');

		$curso = new CursoRecord;
		$curso->descricao = 'Desenvolvendo em PHP-GTK';
		$curso->duracao   = 32;
		$curso->store();

		TTransaction::close();
		echo "Registros inseridos com sucesso. <br/>";

	} catch (Exception $e) {
		
		echo '<b>Erro</b>'. $e->getMessage();
		TTransaction::rollback();
	}	

 ?>
