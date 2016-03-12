<?php 

	class Calcula{

		private $num;
		private $numorigem;

		public function __construct($num){
			$this->numorigem = $num;
			$this->setNum($num);

		}

		public function setNum($num){
			$this->num = $num * 2;
		}

		public function getNum(){
			return $this->num;
		}

		public function getNumorigem(){
			return $this->numorigem;
		}

	}

	$numero = new Calcula(8);	
	echo "<br/>";
	echo "O numero: {$numero->getNumorigem()} ao quadrado é: ".$numero->getNum();


 ?>