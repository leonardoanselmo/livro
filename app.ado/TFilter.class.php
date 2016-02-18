<?php 

	class TFilter extends TExpression{
		
		private $variable;
		private $operator;
		private $value;

		public function __construct($variable, $operator, $value){
			$this->variable = $variable;
			$this->operator = $operator;
			$this->value = $this->transform($value);
		}

		private function transform($value){

			// Caso seja um array
			if (is_array($value)) {
				foreach ($value as $x) {
					if (is_integer($x)) {
						$foo[]=$x;
					} elseif (is_string($x)) {
						$foo[]="'$x'";
					}
				}
				$result = '(' . implode(',', $foo) . ')';
			} 
			// Caso seja uma string
			elseif (is_string($value)) {
				$result = "'$value'";				
			} 
			// Caso seja nulo
			elseif (is_null($value)) {
				$result = 'NULL';
			}
			// Caso seja booleano
			elseif (is_bool($value)) {
				$result = $value ? 'TRUE' : 'FALSE';
			} else {
				$result = $value;
			}
			return $result;
		}

		public function dump(){
			return "{$this->variable} {$this->operator} {$this->value}";
		}

		public function mostramsg(){
			echo "estou mostrando uma mensagem da classe TFILTER <br/>";
		}
	}

 ?>