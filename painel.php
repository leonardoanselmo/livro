<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	$painel = new TPainel(400, 300);

	$texto = new TParagraph('isso é um teste, x: 10, y: 10');
	$painel->put($texto, 10, 10);

	$texto = new TParagraph('outro teste x:200, y:200');
	$painel->put($texto, 200, 200);

	$texto = new TImage('app.images/gnome.png');
	$painel->put($texto, 10, 180);

	$texto = new TImage('app.images/pinguim.jpg');
	$painel->put($texto, 240, 10);

	$painel->show();

 ?>