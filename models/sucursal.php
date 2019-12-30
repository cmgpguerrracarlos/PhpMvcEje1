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
                $this->con = Db::StartUp();
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function __destruct(){
            echo "destryed the object";
        }

        public function SelectAll(){
            try{
                $sql = "SELECT * FROM sucursal";
                $stm = $this->con->prepare($sql);
                $stm->execute();
                
                return $stm->fetchAll(PDO::FETCH_OBJ);    
            }catch(Exception $e){
                die($e->getMessage());
            }
        }

        public function SelectId($id){
            try {
                $sql="SELECT * FROM sucursal WHERE cod=?";
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id));
                return $stm->fetchAll(PDO::FETCH_OBJ);

            } catch (Exception $e) {
                die($e->getMessage());
            }

        }

        public function DeleteId($id){
            try {
                $sql = "DELETE FROM sucursal WHERE cod=?";
                $stm = $this->con->prepare($sql);
                $stm->execute(array($id));
                echo "<br>Deleted cod=$id<br>";
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Update($data){
            try {
                $id = $data->cod;
                $sql = "UPDATE sucursal SET cod=?, dir=?, ciudad=?, dpto=? WHERE cod=$id";
                $stm = $this->con->prepare($sql);
                $stm->execute(array($data->cod,$data->dir,$data->ciudad,$data->dpto));
                echo "<br>Actualizado<br>";

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        public function Insert($data){
            try {
                $sql = "INSERT INTO sucursal (cod,dir,ciudad,dpto) VALUES (?,?,?,?)";
                $stm = $this->con->prepare($sql);
                $stm->execute(array($data->cod,$data->dir,$data->ciudad,$data->dpto));
                echo "<br>Insertado<br>";

            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }
?>