<?php
	require_once 'db.php';
	
	class Crud{
		private $con;
		
		public function __construct(){
			$this->con = Db::conn();
			echo "creado";
		}
		
		public function mostrarTodo(){
			$sql = "SELECT * FROM sucursal";
			$smt = $this->con->prepare($sql);
			$smt->execute();
			return $smt->fetchAll(PDO::FETCH_OBJ);
		}
		
			
	}
?>
