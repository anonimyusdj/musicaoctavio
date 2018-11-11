<?php
require_once "model/site.admin.php";
require_once "model/encript.php";
    class AdminController{
      private $site;
      private $cifrar;
      public function __construct__(){
        $this->site=new SiteAdmin();
        $this->cifrar=new Cifrado();
      }
      public function login(){
          require_once "view/partes/header.php";
          require_once "view/home/menu.php";
          require_once "view/admin/login.php";
          require_once "view/partes/footer.php";
      }

      public function prueba(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/admin/site.php";
        require_once "view/partes/footer.php";
      }

      public function editLogin(){
        if($_POST){
          $data=new SiteAdmin();
          if($_REQUEST['user']!="" && $_REQUEST['pass']!=""){
           /* $user=$this->cifrar->cifrador("cifrar",$_REQUEST['user']);
            $pass=$this->cifrar->cifrador("cifrar",$_REQUEST['pass']);
            $data->user=$user;
            $data->pass=$pass;

            $this->site->editLogin($data);
            echo "datos Cambiado con Exito";*/
              echo $_REQUEST['user']."<br>";
              echo $_REQUEST['pass']."<br>";
          }
        }
      }

    }
?>
