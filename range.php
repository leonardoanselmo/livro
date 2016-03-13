<?php 

	$nums = range(0, 10);

	foreach ($nums as $chave => &$valor) {
		$valor *= 10;
		echo $valor."<br/>";
	}
	print_r($nums);

 ?>