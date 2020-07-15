<?php
session_start();



if(isset($_POST) && (!empty($_POST['deCliente']) && (!empty($_POST['deContrato']) && (!empty($_POST['deContrato']) && $_SESSION['tecnico']){
    include_once 'usuario_mvc.php';
    //instancia y llamado a metodo xxx
    $tr = new Usuario();
    $resultado = $tr->buscarUsuario($_POST['deUsuario'], $_POST['dePassword']);
    if($resultado){
        header("location:index2.php");
    }else{
     echo json_encode(array('error' => true));
    
        //header("location:notFound.html");
    }
}