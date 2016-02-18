<?php 

	class Fornecedor {

		var $Codigo;
		var $RazaoSocial;
		var $Endereco;
		var $Cidade;
		var $Contato;

		function __construct(){
			$this->Contato = new Contato;
		}


		function SetContato($Nome, $Telefone, $Email){
			$this->Contato->SetContato($Nome, $Telefone, $Email);
		}

		function GetContato(){
			return $this->Contato->GetContato();
		}
	}

 ?>