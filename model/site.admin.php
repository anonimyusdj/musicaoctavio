<?php
  class SiteAdmin{
    private $pdo;
    public $user;
    public $pass;

    public function __construct(){
      try {

        $this->pdo=Database::conectar();

      } catch (Exception $e) {

        echo $e->getMessage();
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
