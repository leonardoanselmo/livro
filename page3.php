<?php 

	function __autoload($classe){
		if (file_exists("app.widgets/{$classe}.class.php")) {
			include_once "app.widgets/{$classe}.class.php";
		}
	}

	function onProdutos($get){
		echo "Nesta seção você vai conhecer os produtos da nossa empresa
		      Temos desde pintos, frangos, porcos, bois, vacas e todo tipo de animal
		      que você pode imaginar na nossa fazenda.";
	}

	function onContato($get){
		echo "Para entrar em contato com nossa empresa,
		ligue para 0800-1234-5678 ou mande uma carta endereçada para
		Linha alto coqueiro baixo, fazenda recanto escondido.";
	}

	function onEmpresa($get){
		echo "Aqui na fazenda recanto escondido fazemos eco-turismo,
		     você vai poder conhecer nossas instalações,
		     tirar leite diretamente da vaca, recolher os ovos do galinheiro e o mais
		     importante, vai poder limpar as instalações dos suinos, o que é o auge
		     do passeio. Não deixe de conhecer nossa fazenda, temos lindas cabanas
		     equipadas com cama de casal, fogão a lenha e banheiro.";
	}

	echo "<a href='?method=onProdutos'>Produtos</a><br/>";
	echo "<a href='?method=onContato'>Contato</a><br/>";
	echo "<a href='?method=onEmpresa'>Empresa</a><br/>";

	echo "<br/>";

	$pagina = new TPage;
	$pagina->show();

 ?>