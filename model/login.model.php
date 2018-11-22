<?php
require_once "model/encript.php";
  class LoginModel{

    private $conexion;
    private $cifrar;
    public $usuario;
    public $contrasena;

    public function __construct(){
      $this->conexion=Database::conectar();
      $this->cifrar=new Cifrado();
    }

    public function login(LoginModel $datos){
      try {
          $sql="SELECT * FROM site WHERE usuario=? AND contrasena=? LIMIT 1";
          $user=$this->cifrar->cifrador('cifrar',$datos->usuario);
          $pass=$this->cifrar->cifrador('cifrar',$datos->contrasena);
          $login=$this->conexion->prepare($sql);
          $login->execute(array($user,$pass));
          $rs=$login->fetch(PDO::FETCH_ASSOC);
        if(count($rs)>0 && ($pass==$rs['contrasena'])){
          session_start();
          $_SESSION['idSesion']=$rs['idsitio'];
          $_SESSION['autor']=$rs['autor'];
          echo "<script>alert('Hola Bienvenido ".$rs['autor']."'); location.href = 'admin';</script>'";
        //  header("location: admin");
        }else{
          echo "Usuario o Contraseña incorrectors <br>";
          echo "usuario: ".$datos->usuario ."<br>";
          echo "pass1: ".$datos->contrasena."<br>";
        }
      } catch (Exception $e) {
        echo $e->getMessage();
      }

    }

  }
?>
