<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Metodo tostring</title>
</head>
<body>
	<?php 

		class Cachorro {

			private $Nascimento;

			function __construct($nome){
				$this->nome = $nome;
			}

			function __tostring(){
				return $this->nome;
			}

		}

		$toto = new Cachorro('totó');
		$vava = new Cachorro('vavá');
		echo "$toto <br/>";
		echo "$vava <br/>";

	 ?>
</body>
</html>