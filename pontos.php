<?php 

	$pontos = ["Zé"=>11, "José"=>4, "Zeca"=>22];

	echo "  Zé: " . $pontos["Zé"] . "<br/>";
	echo "José: " . $pontos["José"] . "<br/>";
	echo "Zeca: " . $pontos["Zeca"] . "<br/>";

	$pontos["Zeca"] += 1;

	foreach ($pontos as $key => $value) {
		echo $key . ": " . $value . "<br/>";
	}

 ?>