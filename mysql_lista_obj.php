<?php 

	try {
		
		$conn = new PDO('mysql:host=localhost;port=3307;dbname=livro', 'root', '');
		$result = $conn->query("SELECT codigo, nome FROM famosos");
		if ($result) {
			while ( $row = $result->fetch(PDO::FETCH_OBJ)) {
				echo "$row->codigo"." - "."$row->nome"."<br/>";
			}
		}
		$conn = null;


	} catch (PDOException $e) {
		print "Erro: ".$e->getMessage()."<br/>";
		die();
	}

 ?>
