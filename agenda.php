<?php 

	class Agenda{

		private $nome;
		private $email;
		private $fone;

		function __construct($nome, $email, $fone){
			$this -> nome = $nome;
			$this -> email = $email;
			$this -> fone = $fone;
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public function getEmail(){
			return $this->email;			
		}

		public function setFone($fone){
			$this->fone = $fone;
		}

		public function getFone(){
			return $this->fone;
		}

	}

	$contato = new Agenda('Leonardo Anselmo', 'leonardo_anselmo@hotmail.com', '9993-1184');

	echo "INSERT INTO (nome, email, fone) VALUES ('{$contato->getNome()}', '{$contato->getEmail()}', '{$contato->getFone()}') <br/>";

	$contato->setNome('Patricia Anselmo');
	$contato->setEmail('patricia_anselmo08@hotmail.com');
	$contato->setFone('9609-2716');

	echo "INSERT INTO (nome, email, fone) VALUES ('{$contato->getNome()}', '{$contato->getEmail()}', '{$contato->getFone()}')";	

 ?>