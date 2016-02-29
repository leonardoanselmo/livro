<?php 

	function __autoload($classe){

		if (file_exists("app.ado/{$classe}.class.php")) {
			include_once "app.ado/{$classe}.class.php";
		}

	}

	class AlunoRecord extends TRecord{}
	class CursoRecord extends TRecord{}

	$fabio = new AlunoRecord;
	$fabio->nome = 'Fabio Locatelli';
	$fabio->endereco = 'Rua Merlin';
	$fabio->telefone = '(55) 2222-1111';
	$fabio->cidade = 'Lajeado';

	$julia = clone $fabio;

	$julia->nome = 'Julia Haubert';
	$julia->telefone = '(55) 2222-2222';

	try {
		
		TTransaction::open('my_livro');
	    TTransaction::setLogger(new TLoggerTXT('log4.txt'));

		TTransaction::log("** Persistindo o curso \$fabio");
		$fabio->store();

		TTransaction::log("** Persistindo o curso \$julia");
		$julia->store();

		TTransaction::close();

		echo "Clonagem realizada com sucesso. <br/>";
	
	} catch (Exception $e) {

		echo "<b>Erro</b>".$e->getMessage();
		TTransaction::roolback();
		
	}

 ?>