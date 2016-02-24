<?php 
	
	final class Produto{

		private $descricao;   // descricao do produto
		private $estoque;     // estoque do produto
		private $preco_custo; // preco de custo 

		public function __construct($descricao, $estoque, $preco_custo){
			$this->descricao   = $descricao;
			$this->estoque     = $estoque;
			$this->preco_custo = $preco_custo;
		}

		public function registraCompra($unidades, $preco_custo){
			$this->preco_custo = $preco_custo;
			$this->estoque    += $unidades;
		}

		public function registraVenda($unidades){
			$this->estoque -= $unidades;
		}

		public function getEstoque(){
			return $this->estoque;
		}

		public function calculaPrecoVenda(){
			return $this->preco_custo * 1.3;
		}

	}

	final class Venda{

		private $itens;

		public function addItem($quantidade, Produto $produto){
			$this->itens[] = array($quantidade, $produto);
		}

		public function getItens(){
			return $this->itens;
		}

	}

	// Instanciando objeto Venda

	$venda = new Venda;

	$venda->addItem(3, new Produto('Vinho', 10, 15));
	$venda->addItem(2, new Produto('Salame', 20, 20));
	$venda->addItem(1, new Produto('Queijo', 30, 10));

	$total = 0;
	foreach ($venda->getItens() as $item) {

		$quantidade = $item[0];
		$produto    = $item[1];

		$total += $produto->calculaPrecoVenda() * $quantidade;
		$produto->registraVenda($quantidade);
		

	}

	echo $total;


 ?>