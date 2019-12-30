<?php
    require_once 'db.php';

    class Sucursal{
        private $con;
        public $cod;
        public $dir;
        public $ciudad;
        public $dpto;

        public function __construct(){
            try{
                $this->con = Db::conn();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Listar(){
            try{
                $sql = "SELECT * FROM sucursal";
                $stm = $this->con->prepare($sql);
                $stm->execute();
                
                return $stm->fetchAll(PDO::FETCH_OBJ);    
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function Obtener($id){
            try {
                $sql="SELECT * FROM sucursal WHERE cod=?";
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id));
                return $stm->fetchAll(PDO::FETCH_OBJ);

            } catch (Exception $e) {
                die($e->getMessage());
            }

        }

        public function Eliminar($id){
            try {
                
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Actualizar($data){
            try {
                //code...
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Registrar($data){
            try {
                //code...
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>