<?php


if(isset($_POST)){

    if($_POST['dePassword'] == $_POST['pass2']){
        include_once 'usuarioDAO.php';
        $tr = new Usuario();
        //si el usuario existe en la bd
        $resultado = $tr->buscar($_POST['deUsuario']);
        if($resultado){
           $x = $_POST['dePassword'];
           //encriptar pass
           $passEn = openssl_encrypt($x, "AES-128-ECB", "permiso");
           $pass = $tr->insertarPass($_POST['deUsuario'], $passEn);
           session_start();
           //consulta usuario y asigna a var sesion
           $usuario = $tr->sesionUsuario($_POST['deUsuario']);
           $_SESSION["tecnico"] = $usuario;
           header("location:sesionIndex.php");
           if($pass == false){
              //echo"La contraseña ya existe, enviar a correo";
              header("location:formCrearPass.php?msgCorreo=Ya has creado un password");
		   }
		}else{
            header("location:formCrearPass.php?msg=El usuario no existe");
		}
    }else{
        header("location:notFound.html");
    }
}else{
    header("location:notFound.html");
}
  