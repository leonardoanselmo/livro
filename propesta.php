<?php 

	class Aplicacao {

		static $Quantidade;

		function __construct($Nome){
			self::$Quantidade++;
			$i = self::$Quantidade;
			echo "Nova Aplicacao nr. $i: $Nome <br/>";
		}

	}

	new Aplicacao('Dia');
	new Aplicacao('Noite');
	new Aplicacao('Tarde');
	new Aplicacao('Madrugada');
	new Aplicacao('Agora');
	new Aplicacao('Depois');

	echo "Quantidade de Aplicações: ".Aplicacao::$Quantidade;

 ?>