<pre>
<?php 
/*
	$jogo = array(
		array("ID" => 1, "Nome" => "Zé", "Pontos" => 11),
		array("ID" => 2, "Nome" => "José", "Pontos" => 4),
		array("ID" => 3, "Nome" => "Zeca", "Pontos" => 22)
	);
*/
	$jogo = [
				"Primeiro" => ["ID" => 1, "Nome" => "Zé", "Pontos" => 11],
				"Segundo" => ["ID" => 2, "Nome" => "José", "Pontos" => 4],
				"Terceiro" => ["ID" => 3, "Nome" => "Zeca", "Pontos" => 22]
			];


	print_r($jogo);
	echo $jogo["Primeiro"]["Nome"]."<br/>";
	echo $jogo["Segundo"]["Nome"]." - ".$jogo["Segundo"]["Pontos"]."<br/>";

 ?>
 </pre>