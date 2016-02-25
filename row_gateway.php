<?php 
	
	class ProdutoGateway{

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

		function getObject($id){

			$sql = "SELECT * FROM produtos where id='{$id}'";

			echo $sql . "<br/>";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

			$result = $conn->query($sql);
			$this->data = $result->fetch(PDO::FETCH_ASSOC);
			unset($conn);			

		}

	}

	$vinho = new ProdutoGateway;
	$vinho->id = 1;
	$vinho->descricao = 'Vinho Cabernet';
	$vinho->estoque = 10;
	$vinho->preco_custo = 10;
	$vinho->insert();

	$salame = new ProdutoGateway;
	$salame->id = 2;
	$salame->descricao = 'Salame';
	$salame->estoque= 20;
	$salame->preco_custo = 20;
	$salame->insert();

	$objeto = new ProdutoGateway;
	$objeto->getObject(2);
	$objeto->estoque = $objeto->estoque*2;
	$objeto->descricao = 'Salamino Italiano';
	$objeto->update();

	$vinho->delete();

 ?>