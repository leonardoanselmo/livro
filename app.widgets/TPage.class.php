<?php 

	error_reporting(0);

	class TPage extends TElement{

		public function __construct(){

			parent::__construct('html');

		}

		public function show(){
			$this->run();
			parent::show();
		}

		public function run(){

			if ($_GET) {
				$class  = $_GET['class'];
				$method = $_GET['method'];

				if ($class) {
				 	$object = $class == get_class($this) ? $this : new $class;
				 	if (method_exists($object, $method)) {
				 		call_user_func(array($object, $method), $_GET);
				 	}
				} elseif (function_exists($method)) {
					call_user_func($method, $_GET);
				} 
			}

		}

	}


 ?>