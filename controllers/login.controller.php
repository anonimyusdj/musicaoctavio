<?php
require_once "model/login.model.php";
class LoginController{
  private $login;

  public function __construct(){
    $this->login=new LoginModel();
  }

  public function master(){
    require_once "views/partes/header.php";
    require_once "views/master/home.php";
  }

  public function login(){
    $datos=new LoginModel();
    $datos->usuario=$_REQUEST['user'];
    $datos->contrasena=$_REQUEST['pass'];
  /*  echo "usuario: ".$datos->usuario;
    echo "pass1: ".$datos->contrasena."<br>";
    echo "pass2: ".$_REQUEST['pass'];*/
    $this->login->login($datos);
  }
}
