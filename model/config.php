<?php
require_once "model/site.admin.php";
   $site=SiteAdmin::getInfoSite();
    $imagenes="assets/multimedia/img/";
    $css="assets/css/";
    $js="assets/js/";
    $musica="assets/multimedia/music/";
    $color=$site['background'];
    $autor=$site['autor'];
    $title=$site['nombre_site'];
    $correo=$site['correo'];
    $descripcion=$site['descripcion'];
    $lema=$site['lema'];
    $logo=$site['logo'];
    $perfil=$site['perfil'];
    $telefono=$site['telefono'];
   /* try{
        print_r(SiteAdmin::getInfoSite());
    }catch(PDOException $e){
        print_r($e);
      }*/
?>

