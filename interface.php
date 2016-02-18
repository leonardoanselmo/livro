<?php 

	interface IAluno{

		function getNome();
		function setNome($nome);
		function setResponsavel(Pessoa $responsavel);

	}

	class Aluno implements IAluno{

		function getNome(){
			return $this->nome;
		}

		function setNome($nome){
			$this->nome = $nome;
		}

	}

	$joaninha = new Aluno;
	$joaninha->setNome("Joaninha");
	$joaninha->getNome();

 ?>