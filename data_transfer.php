<?php 
	
	class ProdutoGateway{

		function insert(Produto $object){

			$sql = "INSERT INTO Produtos (id, descricao, estoque, preco_custo)" .
				   " VALUES ('$object->id', '$object->descricao', '$object->estoque', '$object->preco_custo')";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$conn->exec($sql);
			unset($conn);

		}

		function update(Produto $object){
			$sql = "UPDATE produtos set " .
				   "   descricao = '$object->descricao', " .
			       "     estoque = '$object->estoque',  " . 
			       " preco_custo = '$object->preco_custo' " .
			       "    WHERE id = '$object->id' ";
			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');
			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$conn->exec($sql);
			unset($conn);
		}

		function getObject($id){
			$sql = "SELECT * FROM produtos where id='$id'";

			$conn = new PDO("mysql:host=localhost;port=3307;dbname=livro", 'root', '');			
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

			$result = $conn->query($sql);
			$data = $result->fetch(PDO::FETCH_ASSOC);
			unset($conn);
			return $data;
		}
	}

	class Produto{
		public $id;
		public $descricao;
		public $estoque;
		public $preco_custo;
	}

	$gateway = new ProdutoGateway;

	$vinho = new Produto;
	$vinho->id 		    = 1;
	$vinho->descricao   = 'Vinho';
	$vinho->estoque     = 10;
	$vinho->preco_custo = 15;

	$gateway->insert($vinho);

	print_r($gateway->getObject(1));

	$vinho->descricao = 'Vinho Carbenet';

	$gateway->update($vinho);

	print_r($gateway->getObject(1));

 ?>