<pre>
<?php 

	$arr = ["zero", "um", "dois", "três", "quatro"];

	$arr[] = "cinco";

	$arr[1] = "ummm";
	$arr[4] = "quattro";

	print_r($arr);

	unset($arr[3]);

	print_r($arr);

	$x = range(1, 11, 4);
	$y = range("a", "z", 2);
	print_r($x);
	print_r($y);

 ?>
 </pre>