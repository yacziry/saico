<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';
    require_once 'configuracion_mvc.php';

    if(isset($_POST) && (!empty($_POST['deEmail']))){
        include_once 'usuarioDAO.php';
        $tr = new Usuario();
        //si el email existe en la bd
        $resultado = $tr->enviarEmail($_POST['deEmail']);
        if($resultado){
            $p = $tr->enviarPass($resultado);
            //desencriptar
            $x = $p;
            $password = openssl_decrypt($x, "AES-128-ECB", "permiso");
            $correoE = new Email();
            $correoE->enviar($resultado, "Hola, tu password es: $password");
            header("location:formRecuperarPass.php?msgC=Tu password ha sido enviada");
        }else{
            header("location:formRecuperarPass.php?msg=Ingresa un correo registrado");
        }
    }else{
        header("location:formRecuperarPass.php?msg=Ingresa un correo");
	}

    
    class Email{        
	
        function enviar($email, $pass){
            $pm = new PHPMailer();
            $pm->isSMTP();
            $pm->Host="p3plcpnl0719.prod.phx3.secureserver.net";
            //$pm->Host="smtp.office365.com";
            $pm->Port=587;
            $pm->From= EMAIL;
            $pm->SMTPAuth = TRUE;
            $pm->Username = EMAIL;
            $pm->Password= EPASS;
            $pm->FromName="SAICO";
            $pm->Subject = "Recuperar password";
            $pm->addAddress($email);
            $pm->Body=($pass);
            $pm->isHTML(TRUE);
            //$pm->send();
            if(!$pm->send()){
                echo "Mailer Error: " . $pm->ErrorInfo;
            }else{
                echo "E-Mail has been sent";
            }
	    }
    }