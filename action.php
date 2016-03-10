<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	class Receptor{

		function acao($parameter){
			echo "Ação executada com sucesso \n <br/>";
		}

	}

	$receptor = new Receptor;
	$action1 = new TAction(array($receptor, 'acao'));
	$action1->setParameter('nome', 'pablo');
	echo $action1->serialize();

	echo "<br/>";

	$action2 = new TAction('strtoup');
	$action2->setParameter('nome', 'pablo');
	echo $action2->serialize();

 ?>