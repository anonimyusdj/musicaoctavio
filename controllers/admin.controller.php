<?php
require_once "model/site.admin.php";
require_once "model/encript.php";
    class AdminController{
      private $site;
      private $cifrar;
      public function __construct(){
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
      public function home(){
        require_once "view/partes/header.php";
        require_once "view/admin/menu.php";
        require_once "view/admin/home.php";
        require_once "view/partes/footer2.php";
      }
      public function music(){
        require_once "view/partes/header.php";
        require_once "view/admin/menu.php";
        require_once "view/admin/musica.php";
        require_once "view/partes/footer2.php";
      }
      public function subirMusica(){
        try {
          if($_FILES["audio"]["error"]>0){
                  echo "Error al cargar archivo";	
                  } else {
                  $permitidos = array("audio/mp3");
                  $limite_kb = 20000;
                  if(in_array($_FILES["audio"]["type"], $permitidos) && $_FILES["audio"]["size"] <= $limite_kb * 1024){
                         // $ruta="assets/multimedia/";
                          //chmod($ruta,755);
                          $ruta ='assets/multimedia/music/';                         
                          if(!file_exists($ruta)){
                                  mkdir($ruta);
                          }
                          $archivo = $ruta.$_FILES["audio"]["name"];
                          /*if(!file_exists($archivo)){*/
                                  $resultado = copy($_FILES["audio"]["tmp_name"], $archivo);

                                  if($resultado){
                                      
                                      return $archivo;
                                  } else {
                                      echo "Error al guardar archivo";
                                  }
                              /*} else {
                                  echo "Archivo ya existe";
                             }*/
                      } else {
                       echo "Archivo no permitido o excede el tamaño";
                      }
          }
      } catch (Exception $ex) {
          echo $ex->getMessage();
      }
    }

      public function editLogin(){
        if($_POST){
          $data=new SiteAdmin();
          if($_REQUEST['user']!="" && $_REQUEST['pass']!=""){
            $user=$this->cifrar->cifrador("cifrar",$_REQUEST['user']);
            $pass=$this->cifrar->cifrador("cifrar",$_REQUEST['pass']);
            $data->user=$user;
            $data->pass=$pass;

            $this->site->editLogin($data);
            echo "datos Cambiado con Exito";
          }
        }
      }

    }
?>
