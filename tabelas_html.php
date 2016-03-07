<?php 

	$dados[] = array(1, 'Maria do Rosário', 'http://www.maria.com.br', 1200);
	$dados[] = array(2, 'Pedro Cardoso',    'http://www.pedro.com.br',  800);
	$dados[] = array(3, 'João de Barros',   'http://www.joao.com.br',  1500);
	$dados[] = array(4, 'Joana Pereira',    'http://www.joana.com.br',  700);
	$dados[] = array(5, 'Erasmo Carlos',    'http://www.erasmo.com.br',2500);

	echo '<table border=1 width=600>';

	echo '<tr bgcolor="#a0a0a0">';
	echo '<td> Código    </td>';
	echo '<td> Nome      </td>';
	echo '<td> Site      </td>';
	echo '<td> Salário   </td>';
	echo '</tr>';

	$i = 0;
	$total = 0;

	foreach ($dados as $pessoa) {
		$bgcolor = ($i % 2) == 0 ? '#d0d0d0' : '#ffffff';

		echo "<tr bgcolor='$bgcolor'>";

		echo "<td align='center'>{$pessoa[0]}</td>";
		echo "<td>{$pessoa[1]}</td>";
		echo "<td>{$pessoa[2]}</td>";
		echo "<td align='right'>R$: {$pessoa[3]}</td>";

		$total += $pessoa[3];

		$i++;

	}

	echo '<tr>';
	echo '<td colspan=3>Total</td>';

	echo '<td align="right" bgcolor="#a0a0a0">';
	echo 'R$: '.$total;
	echo '</td>';
	echo '</tr>';

	echo '</table>';

 ?>