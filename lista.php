<?php 

	$lista = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
	$qtd = count($lista);

	echo "$qtd <br/>";

	for($x=0; $x < $qtd; $x++){
		echo $x . " : " . $lista[$x] . "<br/>";
	}

 ?>