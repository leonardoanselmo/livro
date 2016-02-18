<?php 
	
	final class TTransaction{

		private static $conn;

		private function __construct(){}

		public static function open($database){

			if (empty(self::$conn)) {
				self::$conn = TConnection::open($database);
				self::$conn->beginTransaction();
			}

		}

		public static function get(){
			return self::$conn;
		}

		public static function rollback(){
			if (self::$conn) {
				self::$conn->rollback();
				self::$conn = NULL;
			}			
		}

		public static function close(){
			if (self::$conn) {
				self::$conn->commit();
				self::$conn = NULL;
			}
		}


	}

 ?>