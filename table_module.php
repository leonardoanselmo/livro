<?php 

	final class Produto{

		static $recordset = array();

		public function adicionar($id, $descricao, $estoque, $preco_custo){
			self::$recordset[$id]['descricao'] = $descricao;
			self::$recordset[$id]['estoque'] = $estoque;
			self::$recordset[$id]['preco_custo'] = $preco_custo; 
		}

		public function registraCompra($id, $unidades, $preco_custo){
			self::$recordset[$id]['preco_custo'] = $preco_custo;
			self::$recordset[$id]['estoque'] += $unidades;
 		}

 		public function registraVenda($id, $unidades){
 			self::$recordset[$id]['estoque'] -= $unidades;
 		}

 		public function getEstoque($id){
 			return self::$recordset[$id]['estoque'];
 		}

 		public function calculaPrecoVenda($id){
 			return self::$recordset[$id]['preco_custo'] * 1.3;
 		}

	}

	$produto = new Produto;

	$produto->adicionar(1, 'Vinho', 10, 15);
	$produto->adicionar(2, 'Salame', 20, 20);

	echo "estoque: <br/>";
	echo $produto->getEstoque(1)."<br/>";
	echo $produto->getEstoque(2)."<br/>";

	echo "preco de venda: <br/>";
	echo $produto->calculaPrecoVenda(1)."<br/>";
	echo $produto->calculaPrecoVenda(2)."<br/>";

	echo "Vende algumas unidades <br/>";
	$produto->registraVenda(1, 5)."<br/>";
	$produto->registraVenda(2, 10)."<br/>";

	echo "Recompoe alguns estoque <br/>";
	$produto->registraCompra(1, 5, 16)."<br/>";
	$produto->registraCompra(2, 10, 22)."<br/>";

	echo "Calcula preco de venda atual: <br/>";
	echo $produto->calculaPrecoVenda(1)."<br/>";
	echo $produto->calculaPrecoVenda(2)."<br/>";

 ?>