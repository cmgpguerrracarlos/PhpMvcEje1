<?php

	class Db{
		public static function StartUp(){
			try{
				$conn = new PDO("mysql:host=localhost; dbname=LabTest","cmgp","1234");
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				return $conn; 
			}catch(PDOException $e){
				die($e->getMessage());
			}
			
		}
	}
?>
