<?php
require_once "model/db.model.php";
  class SiteAdmin{
    private $conexion="asas";
    public $user;
    public $pass;

    public function __construct(){
      try {

        $this->conexion=Database::conectar();
       
      }catch(PDOException $e){
        print_r($e);
      }
    }

    public function getInfoSite(){
      try{
        //echo $this->conexion;
        $pdo=Database::conectar();
        $sql="SELECT * FROM site";
        $stm=$pdo->prepare("SELECT * FROM site");
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
      }catch(PDOException $e){
        print_r($e);
      }
    }

    public function editLogin(SiteAdmin $datos){
      try {
        $sql="UPDATE site SET usuario=?, contrasena=? WHERE idsite=1";
        $this->pdo->prepare($sql)->execute(array(
          $datos->user,
          $datos->pass
        ));

      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }
  }
 ?>
