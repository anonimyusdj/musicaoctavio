<?php
require_once "model/db.model.php";
$controller="index";

if (!isset($_REQUEST['c'])) {
    require_once "controllers/$controller.controller.php";
    $controller=ucwords($controller).'Controller';
    $controller=new $controller;
    $controller->index();
}else{
    $controller=strtolower($_REQUEST['c']);
    $accion=isset($_REQUEST['a'])?$_REQUEST['a']:'Index';
    require_once "controllers/$controller.controller.php";
    $controller=ucwords($controller).'Controller';
    $controller=new $controller;

    call_user_func(array($controller,$accion));
}