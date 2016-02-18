<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Interceptacoes</title>
</head>
<body>
	<?php 

		include_once 'classes/Cachorro.class.php';

		$toto = new Cachorro('Totó');
		$toto->Nascimento = '3 de março';
		$toto->Nascimento = '10/04/2015';

		$data = "10/04/2015";
		echo count(explode("/", $data));

	 ?>
</body>
</html>