<?php 

	class Estagiario extends Funcionario {

		function GetSalario(){
			return number_format($this->Salario * 1.12, 2);
		}

	}

 ?>