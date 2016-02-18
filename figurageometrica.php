<?php 
	
	function __autoload($classe){
		if (file_exists("{$classe}.class.php")) {
			include_once "{$classe}.class.php";
		}
	}
	
	final class FiguraGeometrica{

		private $value;

		private function __construct(){}		

		public static function figurageometrica($figura){

			if ($figura=='circulo') {
				$value = new TCirculo;
				$value->open($figura);				
			}

			if ($figura=='quadrado') {
				$value = new TQuadrado;
				$value->open($figura);
			}

		}

		


	}

 ?>