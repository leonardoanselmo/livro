<?php 

	$dados_william['nome'] = "William Scola";
	$dados_william['idade'] = 22;
	$dados_william['profissao'] = "Controle de Estoque";

	$dados_daline['nome'] = "Daline Dalloglio";
	$dados_daline['idade'] = 21;
	$dados_daline['profissao'] = "Almoxarifado";

	foreach ($dados_william as $chave => $valor) {
		$william->$chave = $valor;
	}

	foreach ($dados_daline as $chave => $valor) {
		$daline->$chave = $valor;
	}

	echo "{$william->nome}, tem {$william->idade} anos e é {$william->profissao}  <br/>";
	echo "{$daline->nome} tem {$daline->idade} anos e é {$daline->profissao} <br/>";

 ?>