<pre>
<?php 

	class Classe{

		public $a = 112;
		public $b = 2;
		public $c = 'Leonardo';

		public function imprimeTeste(){
			echo "Imprime funcao chamada: imprimeTeste() <br/>";
		}

	}

	$objetoA = new Classe();
	$objetoB = new Classe();
	$objetoC = new Classe();

	echo $objetoA->a;
	echo "<br/>";
	foreach ($objetoA as $valores) {
		echo $valores; 
		echo "<br/>";
	}
	echo "<br/>";
	$objetoA->imprimeTeste();

	echo $objetoA->c."<br/>";


	var_dump($objetoA);
	echo "<br/>";
	var_dump($objetoB);
	echo "<br/>";
	var_dump($objetoC);
	echo "<br/>";

	unset($objetoA);
	var_dump($objetoA);


 ?>
 </pre>