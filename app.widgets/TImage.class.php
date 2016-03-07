<?php 

	class TImage extends TElement{

		private $source;

		public function __construct($source){
			parent::__construct('img');
			$this->src = $source;
			$this->border = 0;
		}

	}

 ?>