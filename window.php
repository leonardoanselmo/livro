<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	$janela1 = new TWindow('janela1');
	$janela1->setPosition(20, 20);
	$janela1->setSize(200, 200);
	$janela1->add(new TParagraph('conteudo da janela 1'));
	$janela1->show();

	$janela2 = new TWindow('janela2');
	$janela2->setPosition(300, 20);
	$janela2->setSize(200, 200);
	$janela2->add(new TImage('app.images/pinguim.jpg'));
	$janela2->show();

	$painel = new TPainel(210, 130);
	$painel->put(new TParagraph('<b>Texto1</b>'), 20, 20);
	$painel->put(new TImage('app.images/gnome.png'), 80, 20);

	$janela3 = new TWindow('janela3');
	$janela3->setPosition(140, 120);
	$janela3->setSize(220, 160);
	$janela3->add($painel);
	$janela3->show();

 ?>