<?php 

	class Pessoa{

		var $Codigo;
		var $Nome;
		var $Altura;
		var $Idade;
		var $Nascimento;
		var $Escolaridade;
		var $Salario;

		function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario){

			$this->Codigo = $Codigo;
			$this->Nome = $Nome;
			$this->Altura = $Altura;
			$this->Idade = $Idade;
			$this->Nascimento = $Nascimento;
			$this->Escolaridade = $Escolaridade;
			$this->Salario = $Salario;

		}

		function __destruct(){
			echo "Objeto {$this->Nome} finalizado... <br/>";
		}

		function Crescer($centimetros){

			if ($centimetros > 0) {
				$this->Altura += $centimetros;
			}

		}

		function Formar($titulacao){
			$this->Escolaridade = $titulacao;
		}

		function Envelhecer($anos){
			if ($anos > 0) {
				$this->Idade += $anos;
			}
		}

	}

 ?>