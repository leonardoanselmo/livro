<?php 
	
	class Produto{

		private $data;

		function __get($prop){
			return $this->data[$prop];
		}

		function __set($prop, $value){
			$this->data[$prop] = $value;
		}

		function insert(){
			$sql = "INSERT INTO Produtos (id, descricao, estoque, preco_custo)" .
				   " VALUES ('{$this->id}', '{$this->descricao}', '{$this->estoque}', '{$this->preco_custo}')";

			echo $sql . "<br/>";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$conn->exec($sql);
			unset($conn);
		}

		function update(){
			$sql = "UPDATE produtos set " .
				   "   descricao = '{$this->descricao}', " .
			       "     estoque = '{$this->estoque}',  " . 
			       " preco_custo = '{$this->preco_custo}' " .
			       "    WHERE id = '{$this->id}' ";

			echo $sql . "<br/>";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$conn->exec($sql);
			unset($conn);
		}

		function delete(){

			$sql = "DELETE FROM produtos WHERE id = '{$this->id}'";

			echo $sql . "<br/>";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$conn->exec($sql);
			unset($conn);

		}

		public function registraCompra($unidades, $preco_custo){
			$this->preco_custo = $preco_custo;
			$this->estoque    += $unidades;
		}

		public function registraVenda($unidades){
			$this->estoque -= $unidades;
		}

		public function calculaPrecoVenda(){
			return $this->preco_custo * 1.3;
		}

	}

	$vinho = new Produto;
	$vinho->id = 1;
	$vinho->descricao = 'Vinho Cabernet';
	$vinho->estoque = 10;
	$vinho->preco_custo = 10;
	$vinho->insert();

	$vinho->registraVenda(5);
	echo "       Estoque: {$vinho->estoque} <br/>";
	echo "   Preco Custo: {$vinho->preco_custo} <br/>";
	echo "Preco de Venda: {$vinho->calculaPrecoVenda()} <br/>";

	$vinho->registraCompra(10, 20);
	$vinho->update();
	echo "       Estoque: {$vinho->estoque} <br/>";
	echo "   Preco Custo: {$vinho->preco_custo} <br/>";
	echo "Preco de Venda: {$vinho->calculaPrecoVenda()} <br/>";

 ?>