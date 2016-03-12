<pre>
<?php 

	class Pessoa{

		private $nome;
		private $idade = 0;		

		function __construct($nome, $idade){
			$this -> nome = $nome;
			$this -> idade = $idade;	
		}

		public function setNome($nome){
			$this->nome = $nome;
		}

		public function getNome(){
			return $this->nome;
		}

	}

	$p1 = new Pessoa('Leonardo', 36);
	var_dump($p1);
	$p1->setNome('Anselmo');
	var_dump($p1);
	echo $p1->getNome();

 ?>
 </pre>