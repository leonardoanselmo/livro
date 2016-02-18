<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Objetos Manipulados</title>
</head>
<body>
	<?php 

		include_once 'classes/Pessoa.class.php';
		include_once 'classes/Conta.class.php';

		$carlos = new Pessoa(10, 'Carlos da Silva', 1.85, 25, '10/04/1976', 'Ensino Médio', 650.00);
		
		echo "Manipulando o objeto {$carlos->Nome}: <br/>";
		echo "{$carlos->Nome} é formado em {$carlos->Escolaridade}. <br/>";
		$carlos->Formar("Técnico em Informática");
		echo "$carlos->Nome é formado em $carlos->Escolaridade. <br/>";
		echo "$carlos->Nome têm $carlos->Idade anos. <br/>";
		$carlos->Envelhecer(2);
		echo "$carlos->Nome têm $carlos->Idade anos. <br/>";

		$conta_carlos = new Conta(6677, "CC.1234.56", "10/04/2002", $carlos, 9876, 567.89, false);
		
		echo "<br/>";
		echo "Manipulando a conta de: {$conta_carlos->Titular->Nome} <br/>";
		echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()} <br/>";
		$conta_carlos->Depositar(20);
		echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()} (deposito) <br/>";
		$conta_carlos->Retirar(10);
		echo "O Saldo atual é: R$ {$conta_carlos->ObterSaldo()} (retirada) <br/>";


	 ?>
</body>
</html>