<?php 

	class Funcionario {

		private   $Codigo;
		public    $Nome;
		private   $Nascimento;
		protected $Salario;

		function SetSalario($Salario){

			if (is_numeric($Salario) && ($Salario > 0)) {
				$this->Salario = $Salario;
			}

		}

		function GetSalario(){
			return number_format($this->Salario, 2);
		}


	}

 ?>