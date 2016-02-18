<?php 

	class Cachorro {

		function __construct($coleira, $nome, $idade, $raca){
			$this->coleira = $coleira;
			$this->nome = $nome;
			$this->idade = $idade;
			$this->raca = $raca;
		}

		function __clone(){
			$this->coleira = $this->coleira + 1;
			$this->nome .= " Jr.";
			$this->idade = 0;
		}

	}

	$toto = new Cachorro(100, "Tóto", 25, "Bull Terrier");
	$vava = clone $toto;

	echo "Coleira -> {$toto->coleira} <br/>";
	echo "Nome -> {$toto->nome} <br/>";
	echo "Idade -> {$toto->idade} <br/>";
	echo "Raça -> {$toto->raca} <br/>";
	echo "<br/>";
	echo "Coleira -> {$vava->coleira} <br/>";
	echo "Nome -> {$vava->nome} <br/>";
	echo "Idade -> {$vava->idade} <br/>";
	echo "Raça -> {$vava->raca} <br/>";

 ?>