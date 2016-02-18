<?php 

	try {
		
		$conn = new PDO('mysql:host=localhost;port=3307;dbname=livro', 'root', '');
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (1, 'Erico Verissimo')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (2, 'Jonn Lennon')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (3, 'Mahatma Gandhi')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (4, 'Ayrton Senna')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (5, 'Charlie Chaplin')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (6, 'Anita Garibaldi')");
		$conn->exec("INSERT INTO famosos (codigo, nome) VALUES (7, 'Mario Quintana')");

		$conn = null;

	} catch (PDOException $e) {

		print "Erro! ". $e->getMessage() . "\n";
		die();
		
	}

	echo "Cadastro realizado com sucesso ! <br/>";

 ?>