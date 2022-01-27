<?php

require_once "inc/config.php";
require_once "controller/UsuarioController.php";
require_once "model/Usuario.php";

$app = new UsuarioController();

if ( isset($_GET['acao']) ){

    if( $_GET['acao']=='create' ){
        $app->create();
    }else if ( $_GET['acao']=='update' ){
        $app->update();
    }else if ( $_GET['acao']=='delete'){
        $app->delete();
    } 

}else{
    $app->all();
}