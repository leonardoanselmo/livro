<?php 

	class Pessoa{

		private $nome;
		private $cidadeID;

		function __construct($nome, $cidadeID){
			$this->nome = $nome;
			$this->cidadeID = $cidadeID;
		}

		function __get($propriedade){
			if ($propriedade == 'cidade') {
				return new Cidade($this->cidadeID);
			}
		}

		function getNome(){
			return $this->nome;
		}

	}

	class Cidade{

		private $id;
		private $nome;

		function __construct($id){
			$data[1] = 'Porto Alegre';
			$data[2] = 'São Paulo';
			$data[3] = 'Rio de Janeiro';
			$data[4] = 'Belo Horizonte';

			$this->id = $id;

 			$this->setNome($data[$id]);
 		}

 		function setNome($nome){
 			$this->nome = $nome;
 		}

 		function getNome(){
 			return $this->nome;
 		}

	}

	$maria = new Pessoa('Maria da Silva', 1);
	$pedro = new Pessoa('Pedro dos Santos', 4);
	echo $maria->getNome()."<br/>";
	echo $maria->cidade->getNome()."<br/>";

	echo $pedro->cidade->getNome()."<br/>";

	print_r($maria->cidade);

 ?>