<?php 

	include_once 'classes/XMLBase.class.php';

	class Cachorro extends XMLBase {

		function __construct($nome, $idade, $raca){
			$this->nome = $nome;
			$this->idade = $idade;
			$this->raca = $raca;
		}
				
	}

	$toto = new Cachorro('Totó', 10, 'Bull Terrier');
	$vava = new Cachorro('Vavá', 8, 'Dalmatá');
	echo $toto->toXml();
	echo $vava->toXml();

 ?>