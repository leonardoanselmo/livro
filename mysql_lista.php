<?php 

	try {

		$conn = new PDO('mysql:host=localhost;port=3307;dbname=livro', 'root', '');
		$result = $conn->query("SELECT codigo, nome FROM famosos");
		
		if ($result) {
			foreach ($result as $row) {
				echo $row['codigo'].' - '.$row['nome'].'<br/>';
			}
		} else {
			echo "Dados não encontrado";
		}
		$conn = null;
		
	} catch (PDOException $e) {
		print "Erro! ". $e->getMessage()."<br/>";
		die();
	}


 ?>