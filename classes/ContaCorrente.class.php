<?php 

	class ContaCorrente extends Conta {

		var $Limite;
		var $TaxaTransferencia = 2.5;

		function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Limite){
			parent::__construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo);
			$this->Limite = $Limite;
		}

		function Retirar($quantia){

			$cpmf = 0.05;

			if (($this->Saldo + $this->Limite) >= $quantia) {
				parent::Retirar($quantia);
				parent::Retirar($quantia * $cpmf);
			} else {
				echo "Retirada não permitida ... <br/>";
				return false;
			}
			return true;
		}

		final function Transferir($Conta, $Valor){
			if ($this->Retirar($Valor)) {
				$Conta->Depositar($Valor);
			} 
			if ($this->Titular != $Conta->Titular) {
				$this->Retirar($this->TaxaTransferencia);
			}
		}

	}

 ?>