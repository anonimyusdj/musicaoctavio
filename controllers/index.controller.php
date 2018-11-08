<?php

class IndexController{

    public function index(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/home/home.php";
        require_once "view/partes/footer.php";
    }
    public function musica(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/home/reproductor.php";
        require_once "view/partes/footer.php";
    }
    public function error404(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/erros/404.php";
        require_once "view/partes/footer.php";
    }
    public function patrocinadores(){
        require_once "view/partes/header.php";
        require_once "view/home/menu.php";
        require_once "view/home/patrocinadores.php";
        require_once "view/partes/footer.php";
    }
    public function eventos(){
      require_once "view/partes/header.php";
      require_once "view/home/menu.php";
      require_once "view/home/eventos.php";
      require_once "view/partes/footer.php";
    }
}
