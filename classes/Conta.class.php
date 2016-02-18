<?php 
	
	abstract class Conta{

		var $Agencia;
		var $Codigo;
		var $DataDeCriacao;
		var $Titular;
		var $Senha;
		var $Saldo;
		var $Cancelada;

		function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo){
			$this->Agencia = $Agencia;
			$this->Codigo = $Codigo;
			$this->DataDeCriacao = $DataDeCriacao;
			$this->Titular = $Titular;
			$this->Senha = $Senha;
			$this->Saldo = $Saldo;
			$this->Cancelada = false;
		}

		function __destruct(){
			echo "O objeto Conta: {$this->Codigo} do Titular: {$this->Titular->Nome} finalizado ... <br/>";
		}

		function Retirar($quantia){
			if ($quantia > 0) {
				$this->Saldo -= $quantia;
			}
		}

		function Depositar($quantia){
			if ($quantia >0) {
				$this->Saldo += $quantia;
			}
		}

		function ObterSaldo(){
			return $this->Saldo;
		}

		abstract function Transferir($Conta, $Valor);

	}

 ?>