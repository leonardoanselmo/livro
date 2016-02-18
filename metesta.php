<?php 

	class Aplicacao {

		static function Sobre(){

			$fd = fopen('readme.txt', 'r');
			while ($linha = fgets($fd, 200)) {
				echo $linha;
			}

		}

	}
	Aplicacao::Sobre();

 ?>
