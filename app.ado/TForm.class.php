<?php 

	class TForm{

		protected $fields;
		private $name;

		public function __construct($name = 'my_form'){
			$this->setName($name);
		}

		public function setName($name){
			$this->name = $name;
		}

		

	}

 ?>