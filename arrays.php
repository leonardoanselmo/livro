<?php 

	$palavras = array('all', 'almost', 'air', 'all right', 'able', 'agree', 'again', 'against', 
					  'absolutely', 'a', 'add', 'action', 'act', 'actually', 'about', 'accept',
					  'afford', 'afraid', 'after', 'afternoon', 'age', 'ago', 'ahead', 'allow',
					  'along', 'account', 'ago');
	$aleatorio = array_rand($palavras, 10);

	foreach ($aleatorio as $ale) {
		echo "$palavras[$ale] <br/>";
	}

 ?>