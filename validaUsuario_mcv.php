<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_POST)){
    include_once 'usuarioDAO.php';
    //instancia y llamado a metodo buscarUsuario 
    $tr = new Usuario();
    $x = $_POST['dePassword'];
    $pass = openssl_encrypt($x, "AES-128-ECB", "permiso");
    $resultado = $tr->buscarUsuario($_POST['deUsuario'], $pass);
    if($resultado){
        session_start();
        //identificador sesion
        $usuario = $tr->sesionUsuario($_POST['deUsuario']);
        $_SESSION["tecnico"] = $usuario;
        header("location:index2.php");
    }else{  
        header("location:index.php?msgUser=Datos incorrectos, intentelo de nuevo");
    }
}
    