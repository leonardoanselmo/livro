<?php 

	include_once 'app.ado/TExpression.class.php';
	include_once 'app.ado/TFilter.class.php';

	// Filtro por data que é string
	$filter1 = new TFilter('data', '=', '2007-06-02');
	echo $filter1->dump();
	echo "<br/>";

	// Filtro por salario que é inteiro
	$filter2 = new TFilter('salario', '>', 3000);
	echo $filter2->dump();
	echo "<br/>";

	// Filtro por Array()
	$filter3 = new TFilter('sexo', 'IN', array('M', 'F'));
	echo $filter3->dump();
	echo "<br/>";

	// Filtro por NULL
	$filter4 = new TFilter('contrato', 'IS NOT', NULL);
	echo $filter4->dump();
	echo "<br/>";

	// Filtro por boolean
	$filter5 = new TFilter('ativo', '=', TRUE);
	echo $filter5->dump();
	echo "<br/>";

?>